<!-- FARHAN ALDI NUGRAHA -->
<!-- 41523010186 -->

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Layout</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            padding: 20px;
            background-color: #f5f5f5;
            font-family: 'Times New Roman', Times, serif;
        }

        .frame {
            background-color: #c0c0c0;
            padding: 15px;
            margin-bottom: 0;
            border-radius: 0;
            box-shadow: none;
            border: 1px solid #fff;
            display: flex;
            flex-direction: column;
        }

        .frame-content {
            flex-grow: 1;
        }

        .frame-1 { background-color: #ff8c42; }
        .frame-2, .frame-3 { background-color: #ffe0d1; }
        .frame-4, .frame-5, .frame-6 { background-color: #FFEDE8; }

        .frame h3 {
            font-size: 1.1rem;
            font-weight: bold;
            margin-bottom: 8px;
            color: #333;
        }

        .frame p {
            margin-bottom: 8px;
        }

        .row { margin-bottom: 0; --bs-gutter-x: 0; }
        .row > [class*='col-'] { padding: 0; margin-bottom: 0; }

        .row-equal { display: flex; flex-wrap: wrap; }
        .row-equal > [class*='col-'] { display: flex; }
        .row-equal .frame { width: 100%; height: 100%; }

        .scrolling-message {
            height: 150px;
            overflow-y: auto;
            padding: 10px;
            border-radius: 3px;
        }

        .blinking-reminders {
            animation: blink 1.5s infinite;
        }

        @keyframes blink {
            0%, 50%, 100% { opacity: 1; }
            25%, 75% { opacity: 0.5; }
        }

        .image-placeholder {
            width: 100%;
            height: 200px;
            border-radius: 3px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #999;
        }

        .navigation-buttons {
            margin-top: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 12px;
        }

        .btn-nav {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 130px;
            padding: 10px 25px;
            font-size: 1rem;
            font-weight: 600;
            border-radius: 6px;
            border: none;
            color: #fff;
            background-color: #007bff;
            transition: all 0.3s ease;
            text-decoration: none;
            white-space: nowrap;
        }

        .btn-nav:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        .page-info {
            text-align: center;
            color: #555;
            font-weight: 500;
            flex-basis: 100%;
            margin-top: 10px;
        }

        @media (max-width: 768px) {
            .btn-nav {
                min-width: 110px;
                font-size: 0.9rem;
                padding: 8px 18px;
            }
        }

        @media (max-width: 480px) {
            .navigation-buttons {
                flex-direction: row;
                gap: 8px;
            }

            .btn-nav {
                width: 20%;
                font-size: 0.9rem;
            }
        }

        ul {
            padding: 15px 15px 15px 35px;
            border-radius: 3px;
            margin-bottom: 0;
        }

        ul li { margin-bottom: 3px; line-height: 1.4; }

        .links-list a {
            display: block;
            padding: 3px 0;
            color: #0066cc;
            text-decoration: none;
            line-height: 1.6;
        }

        .links-list a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="frame frame-1">
                    <h3>First Frame: Name and Address</h3>
                    <div class="p-3 rounded">
                        <h4 class="mb-2">{{ $name ?? 'John Doe' }}</h4>
                        <p class="mb-1">{{ $address ?? 'Jl. Contoh No. 123, Jakarta, Indonesia' }}</p>
                        <p class="mb-1">Email: {{ $email ?? 'john.doe@example.com' }}</p>
                        <p class="mb-0">Phone: {{ $phone ?? '+62 812-3456-7890' }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row row-equal">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="frame frame-2">
                    <h3>Second Frame</h3>
                    <p class="fw-bold">Bulleted list of qualifications</p>
                    <ul>
                        <li>Bachelor's Degree in Computer Science</li>
                        <li>5+ years experience in Web Development</li>
                        <li>Proficient in PHP, Laravel, JavaScript</li>
                        <li>Expert in Bootstrap and Responsive Design</li>
                        <li>Strong problem-solving skills</li>
                        <li>Excellent team collaboration</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">
                <div class="frame frame-3">
                    <h3>Third Frame</h3>
                    <p class="fw-bold">Links to favourite sites</p>
                    <div class="links-list p-3 rounded">
                        <a href="https://laravel.com" target="_blank">→ Laravel Official</a>
                        <a href="https://getbootstrap.com" target="_blank">→ Bootstrap</a>
                        <a href="https://github.com" target="_blank">→ GitHub</a>
                        <a href="https://stackoverflow.com" target="_blank">→ Stack Overflow</a>
                        <a href="https://www.php.net" target="_blank">→ PHP Documentation</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row row-equal">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="frame frame-4">
                    <h3>Fourth Frame</h3>
                    <p class="fw-bold">Scrolling message</p>
                    <div class="scrolling-message">
                        <p><strong>Welcome to my portfolio!</strong></p>
                        <p>This is a scrolling message area where you can add important announcements.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt.</p>
                        <p>Scroll down to see more content...</p>
                        <p>Thank you for visiting!</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="frame frame-5">
                    <h3>Fifth Frame</h3>
                    <p class="fw-bold">Blinking reminders</p>
                    <div class="p-3 rounded">
                        <p class="blinking-reminders fw-bold text-danger">⚠ Important Reminder!</p>
                        <p class="blinking-reminders">• Meeting at 2 PM today</p>
                        <p class="blinking-reminders">• Submit report by Friday</p>
                        <p class="blinking-reminders">• Call client tomorrow</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="frame frame-6">
                    <h3>Sixth Frame</h3>
                    <p class="fw-bold">Image</p>
                    <div class="image-placeholder">
                            <img src="{{ url('images/madrid.jpeg') }}" alt="Profile" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="navigation-buttons">
                    <a href="{{ route('bootstrap') }}" class="btn-nav">
                        ← Previous
                    </a>
                    <a href="{{ route('pages.dom') }}" class="btn-nav">
                        Next →
                    </a>
                    <div class="page-info">Page 1 of 2</div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
