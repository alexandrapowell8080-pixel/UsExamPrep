document.addEventListener('DOMContentLoaded', function() {
    let currentQuestion = 0;
    let answeredCount = 0;
    let correctCount = 0;
    let incorrectCount = 0;
    const totalQuestions = document.querySelectorAll('.question-slide').length;
    
    const questionSlides = document.querySelectorAll('.question-slide');
    const questionBtns = document.querySelectorAll('.question-btn');
    
    const questionState = new Array(totalQuestions).fill(null).map(() => ({
        answered: false,
        correct: false,
        flagged: false
    }));
    
    function updateProgress() {
        const percentage = totalQuestions > 0 ? (answeredCount / totalQuestions) * 100 : 0;
        const accuracy = answeredCount > 0 ? Math.round((correctCount / answeredCount) * 100) : 0;
        
        const progressBar1 = document.getElementById('progressBar');
        const progressBar2 = document.getElementById('progressBar2');
        if (progressBar1) {
            progressBar1.style.width = percentage + '%';
            progressBar1.classList.remove('bg-teal-500');
            progressBar1.classList.add('bg-green-500');
        }
        if (progressBar2) {
            progressBar2.style.width = percentage + '%';
            progressBar2.classList.remove('bg-teal-500');
            progressBar2.classList.add('bg-green-500');
        }
        
        const answeredCountEl = document.getElementById('answeredCount');
        const progressAnsweredEl = document.getElementById('progressAnswered');
        if (answeredCountEl) answeredCountEl.textContent = answeredCount;
        if (progressAnsweredEl) progressAnsweredEl.textContent = answeredCount;
        
        const accuracyPercentEl = document.getElementById('accuracyPercent');
        const accuracyBarEl = document.getElementById('accuracyBar');
        if (accuracyPercentEl) accuracyPercentEl.textContent = accuracy;
        if (accuracyBarEl) {
            accuracyBarEl.style.width = accuracy + '%';
            accuracyBarEl.classList.remove('bg-teal-500');
            accuracyBarEl.classList.add('bg-green-500');
        }
        
        const correctCountEl = document.getElementById('correctCount');
        const incorrectCountEl = document.getElementById('incorrectCount');
        if (correctCountEl) correctCountEl.textContent = correctCount;
        if (incorrectCountEl) incorrectCountEl.textContent = incorrectCount;
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
                    const badge = opt.querySelector('.letter-badge');
                    badge.classList.remove('bg-white', 'text-teal-600');
                    badge.classList.add('bg-gradient-to-br', 'from-teal-400', 'to-teal-600', 'text-white');
                });
                
                this.classList.add('border-teal-300', 'bg-teal-50');
                const badge = this.querySelector('.letter-badge');
                badge.classList.remove('bg-gradient-to-br', 'from-teal-400', 'to-teal-600', 'text-white');
                badge.classList.add('bg-white', 'text-teal-600');
                
                selectedOption = this;
            });
        });
        
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
                opt.style.opacity = '0.6';
                
                const badge = opt.querySelector('.letter-badge');
                const isThisCorrect = opt.dataset.correct === 'true';
                
                if (isThisCorrect) {
                    opt.classList.add('border-green-300', 'bg-green-50');
                    opt.classList.remove('border-gray-200');
                    badge.classList.remove('bg-gradient-to-br', 'from-teal-400', 'to-teal-600', 'text-white', 'bg-white', 'text-teal-600');
                    badge.classList.add('bg-green-500', 'text-white');
                    badge.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21.801 10A10 10 0 1 1 17 3.335"/><path d="m9 11 3 3L22 4"/></svg>';
                } else if (opt === selectedOption && !isCorrect) {
                    opt.classList.add('border-red-300', 'bg-red-50');
                    opt.classList.remove('border-gray-200');
                    badge.classList.remove('bg-gradient-to-br', 'from-teal-400', 'to-teal-600', 'text-white', 'bg-white', 'text-teal-600');
                    badge.classList.add('bg-red-500', 'text-white');
                    badge.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="m15 9-6 6"/><path d="m9 9 6 6"/></svg>';
                }
            });
            
            if (isCorrect) {
                slide.querySelector('.correct-message').classList.remove('hidden');
                slide.querySelector('.incorrect-message').classList.add('hidden');
            } else {
                slide.querySelector('.incorrect-message').classList.remove('hidden');
                slide.querySelector('.correct-message').classList.add('hidden');
            }
            
            rationaleSection.classList.remove('hidden');
            checkBtn.classList.add('hidden');
            nextBtn.classList.remove('hidden');
            
            updateProgress();
            showQuestion(qIndex);
        });
        
        skipBtn.addEventListener('click', function() {
            if (currentQuestion < totalQuestions - 1) {
                showQuestion(currentQuestion + 1);
            }
        });
        
        flagBtn.addEventListener('click', function() {
            questionState[qIndex].flagged = !questionState[qIndex].flagged;
            showQuestion(qIndex);
        });
        
        nextBtn.addEventListener('click', function() {
            if (currentQuestion < totalQuestions - 1) {
                showQuestion(currentQuestion + 1);
            }
        });
    });
    
    showQuestion(0);
});