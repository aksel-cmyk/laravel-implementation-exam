<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Resume</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Helvetica Neue", sans-serif;
            background-color: #f1f2f6;
            color: #333;
            line-height: 1.6;
            padding: 20px;
        }

        .resume-wrapper {
            max-width: 900px;
            margin: 40px auto;
            background: #fff;
            padding: 30px;
            box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.1);
        }

        .resume-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 2px solid #007bff;
            padding-bottom: 15px;
            margin-bottom: 20px;
        }

        .hero-section h1 {
            font-size: 32px;
            color: #007bff;
            margin-bottom: 10px;
        }

        .hero-section p {
            font-size: 18px;
            color: #555;
        }

        .contact-info p {
            font-size: 16px;
            color: #666;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        .resume-section h2 {
            font-size: 22px;
            color: #333;
            border-left: 4px solid #007bff;
            padding-left: 10px;
            margin-bottom: 20px;
        }

        .skills-list {
            list-style: none;
        }

        .skills-list li {
            margin-bottom: 8px;
            font-size: 16px;
        }

        .education-item {
            margin-bottom: 15px;
        }

        .education-item h1 {
            font-size: 22px;
            color: #007bff;
            margin-bottom: 5px;
        }

        .year {
            color: #666;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <div class="resume-wrapper">
        <header class="resume-header">
            <div class="hero-section">
                <h1>{{ $resume->name }}</h1>
                <p>{{ $resume->position }}</p>
            </div>
            <div class="contact-info">
                <p><i class="fas fa-phone"></i> {{ $resume->phone }}</p>
                <p><i class="fas fa-envelope"></i>
                    <a href="mailto:{{ $resume->email }}">{{ $resume->email }}</a>
                </p>
                <p><i class="fas fa-map-marker-alt"></i> {{ $resume->address }}</p>
            </div>
        </header>

        <div class="main-content">
            <section>
                <div class="resume-section">
                    <h2>Objective</h2>
                    <p>{{ $resume->objective }}</p>
                </div>

                <div class="resume-section">
                    <h2>Skills</h2>
                    <ul class="skills-list">
                        @foreach($skills as $skill)
                        <li><i class="fas fa-check-circle"></i> {{ $skill->skill }}</li>
                        @endforeach
                    </ul>

                    <div class="resume-section">
                        <h2>Education</h2>
                        @foreach($educations as $education)
                        <div class="education-item">
                            <h1>{{ $education->level }}</h1>
                            <h3>{{ $education->degree }}</h3>
                            <p>{{ $education->institution }} <span>({{ $education->years }})</span></p>
                            <p>{{ $education->address }}</p>
                        </div>
                        @endforeach
                    </div>
            </section>

            <section>
                <div class="resume-section">
                    <h2>Personal Information</h2>
                    <ul class="personal-info">
                        <li><strong>Date of Birth:</strong> {{ $resume->date_of_birth }}</li>
                        <li><strong>Place of Birth:</strong> {{ $resume->place_of_birth }}</li>
                        <li><strong>Age:</strong> {{ $resume->age }} years old</li>
                        <li><strong>Height:</strong> {{ $resume->height }}</li>
                        <li><strong>Weight:</strong> {{ $resume->weight }}</li>
                        <li><strong>Religion:</strong> {{ $resume->religion }}</li>
                        <li><strong>Nationality:</strong> {{ $resume->nationality }}</li>
                        <li><strong>Civil Status:</strong> {{ $resume->civil_status }}</li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
</body>

</html>