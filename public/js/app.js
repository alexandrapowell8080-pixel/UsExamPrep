document.addEventListener('DOMContentLoaded', function() {
    let currentQuestion = 0;
    let answeredCount = 0;
    let correctCount = 0;
    let incorrectCount = 0;
    const totalQuestions = document.querySelectorAll('.question-slide').length;
    
    const questionSlides = document.querySelectorAll('.question-slide');
    const questionBtns = document.querySelectorAll('.question-btn');
    const resultsSection = document.getElementById('resultsSection');
    const quizContainer = document.getElementById('quizContainer');
    
    const questionState = new Array(totalQuestions).fill(null).map(() => ({
        answered: false,
        correct: false,
        flagged: false
    }));
    
    function updateProgress() {
        const percentage = totalQuestions > 0 ? (answeredCount / totalQuestions) * 100 : 0;
        const accuracy = answeredCount > 0 ? Math.round((correctCount / answeredCount) * 100) : 0;
    
        const progressBars = ['progressBar', 'progressBar2', 'accuracyBar'];
        progressBars.forEach(id => {
            const el = document.getElementById(id);
            if (el) {
                el.style.width = (id === 'accuracyBar' ? accuracy : percentage) + '%';
                el.classList.add('bg-green-500');
            }
        });
        
        const counters = {
            'answeredCount': answeredCount,
            'progressAnswered': answeredCount,
            'accuracyPercent': accuracy,
            'correctCount': correctCount,
            'incorrectCount': incorrectCount
        };
        
        Object.entries(counters).forEach(([id, value]) => {
            const el = document.getElementById(id);
            if (el) el.textContent = value;
        });
    }
    
    function showResults() {
        const accuracy = answeredCount > 0 ? Math.round((correctCount / answeredCount) * 100) : 0;
        
        document.getElementById('finalAnswered').textContent = answeredCount;
        document.getElementById('finalCorrect').textContent = correctCount;
        document.getElementById('finalIncorrect').textContent = incorrectCount;
        document.getElementById('finalAccuracyLarge').textContent = accuracy + '%';
        
        const finalBar = document.getElementById('finalAccuracyBar');
        if (finalBar) {
            finalBar.style.width = accuracy + '%';
            if (accuracy >= 70) {
                finalBar.className = 'h-full bg-gradient-to-r from-green-400 to-green-600 transition-all duration-500';
            } else if (accuracy >= 50) {
                finalBar.className = 'h-full bg-gradient-to-r from-yellow-400 to-yellow-600 transition-all duration-500';
            } else {
                finalBar.className = 'h-full bg-gradient-to-r from-red-400 to-red-600 transition-all duration-500';
            }
        }
        resultsSection.classList.remove('hidden');
        resultsSection.style.opacity = '0';
        setTimeout(() => {
            resultsSection.style.transition = 'opacity 0.3s ease';
            resultsSection.style.opacity = '1';
        }, 10);
        if (quizContainer) {
            quizContainer.style.display = 'none';
        }
    }
    
    function showQuestion(index) {
        questionSlides.forEach((slide, i) => {
            if (i === index) {
                slide.classList.remove('hidden');
                slide.classList.add('active');
            } else {
                slide.classList.add('hidden');
                slide.classList.remove('active');
            }
        });
        
        questionBtns.forEach((btn, i) => {
            const state = questionState[i];
            
            btn.classList.remove('bg-teal-500', 'text-white', 'shadow-md');
            btn.classList.remove('bg-green-100', 'text-green-700', 'border', 'border-green-200');
            btn.classList.remove('bg-red-100', 'text-red-700', 'border', 'border-red-200');
            btn.classList.remove('bg-yellow-100', 'text-yellow-700', 'border', 'border-yellow-200');
            btn.classList.remove('bg-gray-100', 'text-gray-600');
            
            if (i === index) {
                if (state.answered) {
                    if (state.correct) {
                        btn.classList.add('bg-green-100', 'text-green-700', 'border', 'border-green-200');
                    } else {
                        btn.classList.add('bg-red-100', 'text-red-700', 'border', 'border-red-200');
                    }
                } else if (state.flagged) {
                    btn.classList.add('bg-yellow-100', 'text-yellow-700', 'border', 'border-yellow-200');
                } else {
                    btn.classList.add('bg-teal-500', 'text-white', 'shadow-md');
                }
            } else {
                if (state.answered) {
                    if (state.correct) {
                        btn.classList.add('bg-green-100', 'text-green-700', 'border', 'border-green-200');
                    } else {
                        btn.classList.add('bg-red-100', 'text-red-700', 'border', 'border-red-200');
                    }
                } else if (state.flagged) {
                    btn.classList.add('bg-yellow-100', 'text-yellow-700', 'border', 'border-yellow-200');
                } else {
                    btn.classList.add('bg-gray-100', 'text-gray-600');
                }
            }
        });
        
        currentQuestion = index;
    }
    questionBtns.forEach((btn, index) => {
        btn.addEventListener('click', () => showQuestion(index));
    });
    
    const reviewBtn = document.getElementById('reviewBtn');
    const restartBtn = document.getElementById('restartBtn');
    
    if (reviewBtn) {
        reviewBtn.addEventListener('click', function() {
            resultsSection.classList.add('hidden');
            resultsSection.style.opacity = '0';
            if (quizContainer) {
                quizContainer.style.display = 'block';
            }
            showQuestion(0);
        });
    }
    
    if (restartBtn) {
        restartBtn.addEventListener('click', function() {
            answeredCount = 0;
            correctCount = 0;
            incorrectCount = 0;
            currentQuestion = 0;
            
            questionState.forEach((state, i) => {
                state.answered = false;
                state.correct = false;
                state.flagged = false;
            });
            questionSlides.forEach(slide => {
                slide.classList.add('hidden');
                slide.classList.remove('active');
                const rationaleSection = slide.querySelector('.rationale-section');
                if (rationaleSection) rationaleSection.classList.add('hidden');
                const checkBtn = slide.querySelector('.check-answer-btn');
                if (checkBtn) checkBtn.classList.remove('hidden');
                const nextBtn = slide.querySelector('.next-question-btn');
                if (nextBtn) nextBtn.classList.add('hidden');
                slide.querySelectorAll('.answer-option').forEach(opt => {
                    opt.style.pointerEvents = '';
                    opt.style.opacity = '';
                    opt.classList.remove('correct', 'incorrect', 'border-green-300', 'bg-green-50', 'border-red-300', 'bg-red-50');
                    opt.classList.add('border-gray-200');
                    const badge = opt.querySelector('[style*="background:#14b8a6"] span');
                    if (badge) {
                        const letter = opt.querySelector('span').textContent.charAt(0);
                        badge.textContent = letter;
                        badge.style.color = '#ffffff';
                    }
                });
                
                const correctMsg = slide.querySelector('.correct-message');
                const incorrectMsg = slide.querySelector('.incorrect-message');
                if (correctMsg) correctMsg.classList.add('hidden');
                if (incorrectMsg) incorrectMsg.classList.add('hidden');
            });
            ['progressBar', 'progressBar2', 'accuracyBar', 'finalAccuracyBar'].forEach(id => {
                const el = document.getElementById(id);
                if (el) {
                    el.style.width = '0%';
                    el.classList.remove('bg-green-500');
                    // Reset gradient classes
                    el.className = el.className.replace(/from-\w+-\d+ to-\w+-\d+/g, '');
                }
            });
            ['answeredCount', 'progressAnswered', 'accuracyPercent', 'correctCount', 'incorrectCount', 
             'finalAnswered', 'finalCorrect', 'finalIncorrect', 'finalAccuracyLarge'].forEach(id => {
                const el = document.getElementById(id);
                if (el) el.textContent = id.includes('Accuracy') ? '0%' : '0';
            });
            
            resultsSection.classList.add('hidden');
            resultsSection.style.opacity = '0';
            if (quizContainer) {
                quizContainer.style.display = 'block';
            }
            
            showQuestion(0);
            updateProgress();
        });
    }
    questionSlides.forEach((slide, qIndex) => {
        const checkBtn = slide.querySelector('.check-answer-btn');
        const skipBtn = slide.querySelector('.skip-btn');
        const flagBtn = slide.querySelector('.flag-btn');
        const nextBtn = slide.querySelector('.next-question-btn');
        const rationaleSection = slide.querySelector('.rationale-section');
        const options = slide.querySelectorAll('.answer-option');
        
        let selectedOption = null;
        let answered = false;
        options.forEach(option => {
            option.addEventListener('click', function() {
                if (answered) return;
                
                options.forEach(opt => {
                    opt.classList.remove('border-teal-300', 'bg-teal-50');
                });
                
                this.classList.add('border-teal-300', 'bg-teal-50');
                selectedOption = this;
            });
        });
        if (checkBtn) {
            checkBtn.addEventListener('click', function() {
                if (!selectedOption || answered) return;
                
                answered = true;
                questionState[qIndex].answered = true;
                answeredCount++;
                
                const isCorrect = selectedOption.dataset.correct === 'true';
                questionState[qIndex].correct = isCorrect;
                
                if (isCorrect) {
                    correctCount++;
                } else {
                    incorrectCount++;
                }
                options.forEach(opt => {
                    opt.style.pointerEvents = 'none';
                    opt.classList.remove('cursor-pointer');
                    
                    const isThisCorrect = opt.dataset.correct === 'true';
                    const badgeSpan = opt.querySelector('[style*="background:#14b8a6"] span');
                    
                    if (isThisCorrect) {
                        opt.classList.add('correct', 'border-green-300', 'bg-green-50');
                        opt.classList.remove('border-gray-200');
                        if (badgeSpan) {
                            badgeSpan.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21.801 10A10 10 0 1 1 17 3.335"/><path d="m9 11 3 3L22 4"/></svg>';
                            opt.querySelector('[style*="background:#14b8a6"]').style.background = '#22c55e';
                        }
                    } else if (opt === selectedOption && !isCorrect) {
                        opt.classList.add('incorrect', 'border-red-300', 'bg-red-50');
                        opt.classList.remove('border-gray-200');
                        if (badgeSpan) {
                            badgeSpan.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="m15 9-6 6"/><path d="m9 9 6 6"/></svg>';
                            opt.querySelector('[style*="background:#14b8a6"]').style.background = '#ef4444';
                        }
                    } else {
                        opt.style.opacity = '0.5';
                    }
                });
                
                const correctMsg = slide.querySelector('.correct-message');
                const incorrectMsg = slide.querySelector('.incorrect-message');
                if (correctMsg) correctMsg.classList.toggle('hidden', !isCorrect);
                if (incorrectMsg) incorrectMsg.classList.toggle('hidden', isCorrect);
                if (rationaleSection) rationaleSection.classList.remove('hidden');
                if (checkBtn) checkBtn.classList.add('hidden');
                if (nextBtn) nextBtn.classList.remove('hidden');
                const isLastQuestion = (qIndex === totalQuestions - 1);
                updateProgress();
                showQuestion(qIndex);
                if (isLastQuestion && nextBtn) {
                    nextBtn.innerHTML = 'See Results <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>';
                    nextBtn.onclick = function(e) {
                        e.preventDefault();
                        showResults();
                    };
                }
            });
        }
        if (skipBtn) {
            skipBtn.addEventListener('click', function() {
                if (currentQuestion < totalQuestions - 1) {
                    showQuestion(currentQuestion + 1);
                }
            });
        }
        if (flagBtn) {
            flagBtn.addEventListener('click', function() {
                questionState[qIndex].flagged = !questionState[qIndex].flagged;
                showQuestion(qIndex);
                updateProgress();
            });
        }
        if (nextBtn) {
            nextBtn.addEventListener('click', function() {
                if (currentQuestion < totalQuestions - 1) {
                    showQuestion(currentQuestion + 1);
                }
            });
        }
    });
    
    showQuestion(0);
    updateProgress();
});