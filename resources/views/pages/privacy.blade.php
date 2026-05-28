<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0" name="viewport">
    <title>Privacy Policy | UsExamPrep</title>
    <meta content="Privacy Policy for UsExamPrep." name="description">

    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/privacy.css') }}" rel="stylesheet">
    <script src="{{ asset('js/welcome.js') }}" defer></script>

    <meta name="robots" content="noindex, nofollow">

</head>

<body>
    @include('partials.nav-bar')

    <main class="page-main legal-section">
        <div class="max-width-wrapper small-max-width">
            <div class="legal-container">
                <h1 class="legal-title">Privacy Policy</h1>
                <span class="legal-updated">Last Updated: May 19, 2026</span>

                <div class="legal-content">
                    <p>Usexamprep.com ("we," "our," or "us") is committed to protecting your privacy.</p>
                    <p>This policy outlines how we collect, use, disclose, and safeguard your information when you use
                        our website or services. By accessing Usexamprep.com, you agree to the terms of this policy.</p>

                    <h2>1. Information We Collect</h2>
                    <p>We may collect the following data:</p>
                    <ul>
                        <li><strong>Personal Information:</strong> Name, email, contact details, payment information
                            (processed securely via third-party processors like Stripe/PayPal).</li>
                        <li><strong>Usage Data:</strong> IP address, browser type, device information, pages visited,
                            and interactions (via cookies and analytics tools like Google Analytics).</li>
                        <li><strong>User Contributions:</strong> Exam responses, progress tracking, and feedback.</li>
                    </ul>

                    <h2>2. How We Use Your Information</h2>
                    <p>Your data is used to:</p>
                    <ul>
                        <li>Provide and personalize exam preparation services.</li>
                        <li>Process transactions and send service-related communications.</li>
                        <li>Improve website functionality and user experience.</li>
                        <li>Comply with legal obligations and prevent fraud.</li>
                    </ul>
                    <p><em>Note: We do not sell your data to third parties.</em></p>

                    <h2>3. Cookies and Tracking Technologies</h2>
                    <p>We use cookies to:</p>
                    <ul>
                        <li>Enhance site performance and remember user preferences.</li>
                        <li>Analyze trends via tools like Google Analytics (opt-out available).</li>
                        <li>Third-party cookies (e.g., advertising networks) may track usage per their policies.</li>
                    </ul>

                    <h2>4. Data Sharing and Disclosure</h2>
                    <p>We may share data with:</p>
                    <ul>
                        <li><strong>Service Providers:</strong> Payment processors, hosting services, and analytics
                            providers.</li>
                        <li><strong>Legal Compliance:</strong> If required by law (e.g., subpoenas, court orders).</li>
                        <li><strong>Business Transfers:</strong> In mergers/acquisitions, with user notice.</li>
                    </ul>

                    <h2>5. Data Security</h2>
                    <p>We implement:</p>
                    <ul>
                        <li>Encryption (SSL/TLS) for data transmission.</li>
                        <li>Regular security audits and access controls.</li>
                        <li>Secure storage with reputable cloud providers.</li>
                    </ul>
                    <p>Despite safeguards, no online platform is 100% secure. Users are encouraged to protect their
                        login credentials.</p>

                    <h2>6. Your Rights</h2>
                    <p>Depending on your location (e.g., GDPR/CCPA), you may:</p>
                    <ul>
                        <li>Access, correct, or request deletion of your data.</li>
                        <li>Opt out of marketing communications.</li>
                        <li>Withdraw consent (where applicable).</li>
                        <li>Lodge complaints with a data protection authority.</li>
                    </ul>
                    <p>Contact: <a href="mailto:admin@usexamprep.com">admin@usexamprep.com</a> for requests.</p>

                    <h2>7. Third-Party Links</h2>
                    <p>Usexamprep.com may link to external sites. We are not responsible for their privacy practices.
                        Review their policies before sharing data.</p>

                    <h2>8. Children's Privacy</h2>
                    <p>We do not knowingly collect data from children under 13 (or 16 under GDPR). Parents/guardians may
                        contact us to remove such data.</p>

                    <h2>9. Policy Updates</h2>
                    <p>We may update this policy periodically. Changes will be posted here with a revised "Last Updated"
                        date. Continued use constitutes acceptance.</p>

                    <h2>10. Contact Us</h2>
                    <p>For questions or requests regarding this policy, email: <a
                            href="mailto:admin@usexamprep.com">admin@usexamprep.com</a>.</p>

                    <h2>Additional Notes for Usexamprep.com</h2>
                    <ul>
                        <li><strong>Exam Data:</strong> User-generated exam answers may be anonymized for analytics but
                            not tied to personal identity.</li>
                        <li><strong>Payment Compliance:</strong> We adhere to PCI DSS standards for payment processing.
                        </li>
                        <li><strong>User Consent:</strong> We use a cookie banner for EU users (GDPR compliance).</li>
                    </ul>
                </div>
            </div>
        </div>
    </main>

    @include('partials.footer')
</body>

</html>