   <style>
        :root {
            --primary-color: #00BFA5;
            --primary-dark: #009688;
            --text-light: #ffffff;
            --text-muted: #b0b0b0;
            --bg-overlay: rgba(0, 0, 0, 0.75);
            --input-bg: rgba(255, 255, 255, 0.08);
            --input-border: rgba(255, 255, 255, 0.15);
        }
        .vedio-section {
            position: relative;
            width: 100%;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .video-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            overflow: hidden;
        }

        .video-background video,
        .video-background img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(0.5);
        }


        .content-wrapper {
            position: relative;
            z-index: 10;
            display: grid;
            grid-template-columns: 1fr 1.2fr;
            gap: 4rem;
            max-width: 1400px;
            padding: 3rem;
            width: 100%;
            align-items: center;
        }

        .intro-section {
            animation: slideInLeft 1s ease-out;
        }

        .intro-section .tagline {
            font-size: 1.1rem;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: var(--primary-color);
            margin-bottom: 1rem;
            font-weight: 300;
        }

        .intro-section h1 {
            font-size: 5rem;
            font-family: 'goldman', sans-serif;
            line-height: 1;
            margin-bottom: 1.5rem;
            background: linear-gradient(135deg, #fff 0%, var(--primary-color) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            letter-spacing: 2px;
        }

        .intro-section .subtitle {
            font-size: 1.3rem;
            color: var(--text-muted);
            font-weight: 300;
            margin-bottom: 2rem;
        }

        .form-container {
            background: var(--bg-overlay);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-radius: 24px;
            padding: 3rem;
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.5);
            animation: slideInRight 1s ease-out;
        }

        .vedio-contact-form .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .vedio-contact-form .form-field {
            width: 100%;
        }

        .vedio-contact-form .form-field label {
            display: block;
            font-size: 0.9rem;
            font-weight: 600;
            color: var(--text-light);
            margin-bottom: 0.5rem;
            letter-spacing: 0.5px;
        }

        .vedio-contact-form .form-field label .required {
            color: var(--primary-color);
        }

        .vedio-contact-form input[type="text"],
        .vedio-contact-form input[type="email"],
        .vedio-contact-form input[type="tel"],
        .vedio-contact-form select {
            width: 100%;
            padding: 1rem 1.2rem;
            background: var(--input-bg);
            border: 1px solid var(--input-border);
            border-radius: 12px;
            color: var(--text-light);
            font-size: 1rem;
            transition: all 0.3s ease;
            outline: none;
        }

        .vedio-contact-form input::placeholder {
            color: rgba(255, 255, 255, 0.4);
        }

        .vedio-contact-form input:focus,
        .vedio-contact-form select:focus {
            background: rgba(255, 255, 255, 0.12);
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(0, 191, 165, 0.1);
        }

        .vedio-contact-form select {
            cursor: pointer;
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg width='12' height='8' viewBox='0 0 12 8' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1 1L6 6L11 1' stroke='%23ffffff' stroke-width='2' stroke-linecap='round'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 1.2rem center;
            padding-right: 3rem;
        }

        .vedio-contact-form select option {
            background: #1a1a1a;
            color: var(--text-light);
        }


        .form-submit {
            margin-top: 2rem;
        }

        .form-submit input[type="submit"],
        .form-submit button {
            width: 100%;
            padding: 1.2rem 2rem;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
            border: none;
            border-radius: 12px;
            color: var(--text-light);
            font-size: 1.1rem;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
            cursor: pointer;
            transition: all 0.4s ease;
            box-shadow: 0 10px 30px rgba(0, 191, 165, 0.3);
            font-family: 'Outfit', sans-serif;
        }

        .form-submit input[type="submit"]:hover,
        .form-submit button:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(0, 191, 165, 0.5);
        }

        .wpcf7-not-valid-tip {
            color: #ff6b6b;
            font-size: 0.85rem;
            margin-top: 0.5rem;
            display: block;
        }

        .wpcf7-response-output {
            margin-top: 1.5rem;
            padding: 1rem;
            border-radius: 8px;
            font-size: 0.95rem;
        }

        .wpcf7-mail-sent-ok {
            background: rgba(0, 191, 165, 0.2);
            border: 1px solid var(--primary-color);
            color: var(--primary-color);
        }

        .wpcf7-validation-errors {
            background: rgba(255, 107, 107, 0.2);
            border: 1px solid #ff6b6b;
            color: #ff6b6b;
        }

        /* Animations */
        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .content-wrapper {
                grid-template-columns: 1fr;
                gap: 2rem;
                padding: 2rem;
            }

            .intro-section h1 {
                font-size: 4rem;
            }

            .form-container {
                padding: 2rem;
            }
        }

        @media (max-width: 768px) {
            .vedio-contact-form .form-row {
                grid-template-columns: 1fr;
                gap: 1rem;
                margin-bottom: 1rem;
            }

            .intro-section h1 {
                font-size: 3rem;
            }

            .intro-section .subtitle {
                font-size: 1.1rem;
            }

            .form-container {
                padding: 1.5rem;
            }

            .content-wrapper {
                padding: 1.5rem;
            }
        }

        @media (max-width: 480px) {
            .intro-section h1 {
                font-size: 2.5rem;
            }

            .intro-section .tagline {
                font-size: 0.9rem;
            }
        }
    </style>

<section class="vedio-section section font-primary">
        <div class="video-background">
            <!-- Desktop Video -->
            <video 
                src="http://localhost/canalmotor/wp-content/uploads/2026/01/1677561014_Product-CG-Video.mp4" 
                class="hidden md:block" 
                autoplay 
                muted 
                loop 
                playsinline
            ></video>
            <!-- Mobile Image -->
            <img 
                src="http://localhost/canalmotor/wp-content/uploads/2026/01/x70plusform.png" 
                alt="Test Drive Background" 
                class="block md:hidden"
            >
        </div>

        <div class="content-wrapper">
            <div class="intro-section">
                <div class="tagline">Get in touch</div>
                <h1>Request a<br>Test Drive</h1>
                <div class="subtitle">Nationwide Dealerships Available</div>
            </div>

            <div class="form-container">
                <div class="vedio-contact-form">
                    <!-- Contact Form 7 Shortcode Integration -->
                    <?php echo do_shortcode('[contact-form-7 id="3c09baa" title="Form-Vedio"]'); ?>
                    
                    
                </div>
            </div>
        </div>
    </section>