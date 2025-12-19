<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TDEC-(IT) Blog</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }


        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background: #ffffff;
            color: #333;
            overflow-x: hidden;
            transition: all 0.3s ease;
        }

        body.dark-mode {
            background: #000000;
            color: #ffffff;
        }

        body.dark-mode .category h2 {
            color: #ffffff;
        }

        body.dark-mode .media,
        body.dark-mode .media-classroom {
            background: #1a1a1a;
        }

        body.dark-mode .footer {
            background: #000000;
        }

        .header {
            width: 100%;
            position: relative;
            overflow: hidden;
            margin-bottom: 30px;
        }

        .header img {
            width: 100%;
            height: auto;
            max-height: 500px;
            object-fit: cover;
            display: block;
            transition: transform 0.3s ease;
        }

        .header img:hover {
            transform: scale(1.02);
        }

        .container {
            width: 95%;
            max-width: 1400px;
            margin: auto;
            padding: 20px;
        }

        .category {
            text-align: center;
            margin: 40px 0;
            padding: 0 15px;
            animation: fadeInUp 0.8s ease-out;
        }

        .category h2 {
            font-size: 32px;
            color: #444;
            margin-bottom: 30px;
            text-transform: uppercase;
            position: relative;
            display: inline-block;
            padding-bottom: 15px;
            animation: float 3s ease-in-out infinite;
        }

        .category-description {
            max-width: 800px;
            margin: 0 auto 30px;
            text-align: center;
            font-size: 18px;
            line-height: 1.8;
            color: #666;
            padding: 25px;
            position: relative;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            transition: all 0.5s ease;
            border: 1px solid rgba(255, 255, 255, 0.2);
            overflow: hidden;
            opacity: 0;
            transform: translateY(30px);
        }

        .category-description.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .category-description::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            background-size: 200% 200%;
            animation: gradientMove 3s ease infinite;
            border-radius: 20px;
            z-index: -1;
        }

        .category-description::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
            animation: rotate 10s linear infinite;
            z-index: -1;
        }

        .category-description:hover {
            transform: translateY(-5px) scale(1.02);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
            border-color: rgba(255, 204, 0, 0.3);
        }

        .category-description.visible::before {
            animation: borderGlow 2s ease-in-out infinite;
        }

        body.dark-mode .category-description {
            color: #e0e0e0;
            background: rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        body.dark-mode .category-description:hover {
            background: rgba(0, 0, 0, 0.3);
            border-color: rgba(255, 204, 0, 0.5);
        }

        @keyframes borderGlow {
            0% {
                box-shadow: 0 0 5px rgba(255, 204, 0, 0.2);
            }

            50% {
                box-shadow: 0 0 20px rgba(255, 204, 0, 0.4);
            }

            100% {
                box-shadow: 0 0 5px rgba(255, 204, 0, 0.2);
            }
        }

        @keyframes rotate {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes gradientMove {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        @keyframes shine {
            0% {
                background-position: 0% 0%;
            }

            100% {
                background-position: 200% 0%;
            }
        }

        @media (max-width: 768px) {
            .category-description {
                font-size: 16px;
                padding: 15px;
                margin: 0 auto 20px;
            }
        }

        @media (max-width: 576px) {
            .category-description {
                font-size: 15px;
                padding: 12px;
                margin: 0 auto 15px;
            }
        }

        .gallery,
        .visit-gallery,
        .thumbnail-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            padding: 20px;
            width: 100%;
        }

        .media {
            position: relative;
            width: 100%;
            aspect-ratio: 4/3;
            overflow: hidden;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            transition: all 0.4s ease;
            animation: fadeInUp 0.6s ease-out;
        }

        .media:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .media img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .media:hover img {
            transform: scale(1.15);
        }

        .gallery-classroom {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            padding: 20px;
            width: 100%;
        }

        .media-classroom {
            position: relative;
            width: 100%;
            aspect-ratio: 1;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            transition: all 0.4s ease;
            animation: fadeInUp 0.6s ease-out;
        }

        .media-classroom:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .media-classroom img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .media-classroom:hover img {
            transform: scale(1.15);
        }

        .classroom-video {
            width: 100%;
            max-width: 800px;
            margin: 30px auto;
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            animation: fadeInUp 0.8s ease-out;
        }

        .classroom-video video {
            width: 100%;
            aspect-ratio: 9/16;
            object-fit: cover;
            display: block;
            transition: all 0.3s ease;
        }

        .classroom-video video:hover {
            transform: scale(1.05);
        }

        .video-control {
            position: absolute;
            bottom: 15px;
            right: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
            background: rgba(0, 0, 0, 0.6);
            padding: 8px 15px;
            border-radius: 25px;
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 10;
        }

        .video-hint {
            color: white;
            font-size: 14px;
            font-weight: 500;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }

        .video-control i {
            color: white;
            font-size: 20px;
            transition: transform 0.3s ease;
        }

        .video-control:hover {
            background: rgba(0, 0, 0, 0.8);
            transform: scale(1.1);
        }

        .video-control:hover i {
            transform: rotate(180deg);
        }

        .footer {
            background: linear-gradient(135deg, #1a1a1a, #333, #1a1a1a);
            background-size: 200% 200%;
            color: white;
            text-align: center;
            padding: 50px 20px;
            line-height: 1.8;
            font-size: 16px;
            border-top: 5px solid #ffcc00;
            animation: gradientMove 15s infinite alternate;
            position: relative;
            overflow: hidden;
        }

        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, transparent 45%, rgba(255, 204, 0, 0.1) 50%, transparent 55%);
            animation: shine 3s infinite;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            position: relative;
            z-index: 1;
        }

        .footer-section {
            padding: 20px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 15px;
            backdrop-filter: blur(10px);
            transition: transform 0.3s ease;
            animation: slideInUp 0.8s ease-out;
        }

        .footer-section:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.1);
        }

        .footer-section h3 {
            color: #ffcc00;
            font-size: 24px;
            margin-bottom: 20px;
            position: relative;
            display: inline-block;
        }

        .footer-section h3::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 3px;
            background: #ffcc00;
            border-radius: 2px;
        }

        .footer-section p {
            margin: 15px 0;
            line-height: 1.8;
        }

        .footer-section a {
            color: #ffcc00;
            text-decoration: none;
            transition: all 0.3s ease;
            position: relative;
            display: inline-block;
            padding: 5px 0;
        }

        .footer-section a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background: linear-gradient(90deg, #ffcc00, #ffffff, #ffcc00);
            background-size: 200% 100%;
            transition: width 0.3s ease;
            animation: shine 3s linear infinite;
        }

        .footer-section a:hover {
            color: #ffffff;
            transform: translateY(-2px);
        }

        .footer-section a:hover::after {
            width: 100%;
        }

        .celebration-text {
            font-size: 18px;
            line-height: 1.8;
            margin: 20px 0;
            animation: floatUpDown 3s ease-in-out infinite;
        }

        .celebration-highlight {
            color: #ffcc00;
            font-weight: bold;
            text-shadow: 0 0 10px rgba(255, 204, 0, 0.5);
            animation: glow 2s infinite;
        }

        @media (max-width: 1200px) {

            .gallery,
            .visit-gallery,
            .thumbnail-gallery {
                grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
                gap: 20px;
            }

            .gallery-classroom {
                grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            }
        }

        @media (max-width: 992px) {
            .container {
                width: 90%;
                padding: 15px;
            }

            .category h2 {
                font-size: 28px;
            }

            .gallery,
            .visit-gallery,
            .thumbnail-gallery {
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                gap: 15px;
            }

            .gallery-classroom {
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            }
        }

        @media (max-width: 768px) {
            .container {
                width: 95%;
                padding: 10px;
            }

            .categoryinf {
                margin: 30px 0;
            }

            .category h2 {
                font-size: 24px;
                margin-bottom: 20px;
            }

            .gallery,
            .visit-gallery,
            .thumbnail-gallery {
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                gap: 12px;
                padding: 10px;
            }

            .gallery-classroom {
                grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
                gap: 10px;
            }

            .classroom-video {
                max-width: 100%;
            }

            .classroom-video video {
                aspect-ratio: 9/16;
            }

            .footer {
                padding: 25px 15px;
                font-size: 14px;
            }

            .video-control {
                padding: 6px 12px;
                bottom: 10px;
                right: 10px;
            }

            .video-hint {
                font-size: 12px;
            }

            .video-control i {
                font-size: 16px;
            }
        }

        @media (max-width: 576px) {
            .container {
                width: 100%;
                padding: 8px;
            }

            .category h2 {
                font-size: 20px;
                margin-bottom: 15px;
            }

            .gallery,
            .visit-gallery,
            .thumbnail-gallery {
                grid-template-columns: 1fr;
                gap: 10px;
            }

            .gallery-classroom {
                grid-template-columns: repeat(2, 1fr);
            }

            .media,
            .media-classroom {
                aspect-ratio: 4/3;
            }

            .classroom-video video {
                aspect-ratio: 9/16;
            }

            .header img {
                max-height: 300px;
            }

            .video-control {
                padding: 5px 10px;
                bottom: 8px;
                right: 8px;
            }

            .video-hint {
                font-size: 10px;
            }

            .video-control i {
                font-size: 14px;
            }
        }

        .theme-toggle {
            position: fixed;
            bottom: 20px;
            left: 20px;
            z-index: 1000;
            background: #333;
            color: white;
            border: none;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .theme-toggle i {
            font-size: 20px;
        }

        .theme-toggle:hover {
            background: #444;
            transform: scale(1.1);
        }

        body.dark-mode .theme-toggle {
            background: #ffffff;
            color: #333;
        }

        body.dark-mode .theme-toggle:hover {
            background: #f0f0f0;
        }

        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes glow {
            0% {
                box-shadow: 0 0 5px rgba(255, 204, 0, 0.5);
            }

            50% {
                box-shadow: 0 0 20px rgba(255, 204, 0, 0.8);
            }

            100% {
                box-shadow: 0 0 5px rgba(255, 204, 0, 0.5);
            }
        }

        @keyframes floatUpDown {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .welcome-text {
            text-align: center;
            padding: 20px 0;
            margin-bottom: 30px;
            position: relative;
            overflow: hidden;
        }

        .welcome-text h1 {
            font-size: 3.5rem;
            font-weight: 800;
            background: linear-gradient(45deg, #ffcc00, #ff9900, #ffcc00);
            background-size: 200% auto;
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
            animation: shine 3s linear infinite, float 3s ease-in-out infinite;
            position: relative;
            display: inline-block;
        }

        .welcome-text h1::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 150px;
            height: 4px;
            background: linear-gradient(90deg, #ffcc00, #ff9900, #ffcc00);
            background-size: 200% 100%;
            border-radius: 2px;
            animation: shine 3s linear infinite;
        }

        @media (max-width: 768px) {
            .welcome-text h1 {
                font-size: 2.5rem;
            }
        }

        @media (max-width: 576px) {
            .welcome-text h1 {
                font-size: 2rem;
            }
        }

        .creator-credit {
            text-align: center;
            margin-top: 30px;
            padding-top: 15px;
            border-top: 1px solid rgba(255, 255, 255, 0.05);
            position: relative;
            z-index: 2;
        }

        .creator-credit p {
            font-size: 2rem;
            color: rgba(255, 255, 255, 0.5);
            text-shadow: none;
            animation: none;
            letter-spacing: 1px;
            font-weight: 300;
        }

        .creator-credit span {
            font-weight: 300;
            color: rgba(255, 255, 255, 0.5);
            background: none;
            -webkit-background-clip: initial;
            background-clip: initial;
            animation: none;
        }

        @media (max-width: 768px) {
            .creator-credit p {
                font-size: 1rem;
            }
        }

        @media (max-width: 576px) {
            .creator-credit p {
                font-size: 1rem;
            }
        }

        .image-upload-section {
            background: rgba(255, 255, 255, 0.05);
            padding: 30px;
            border-radius: 15px;
            margin: 20px 0;
            text-align: center;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .image-upload-section:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            border-color: rgba(255, 204, 0, 0.3);
        }

        .image-upload-section h3 {
            color: #ffcc00;
            font-size: 24px;
            margin-bottom: 20px;
            position: relative;
            display: inline-block;
        }

        .image-upload-section h3::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 3px;
            background: linear-gradient(90deg, #ffcc00, #ff9900, #ffcc00);
            background-size: 200% 100%;
            animation: shine 3s linear infinite;
        }

        .upload-info {
            margin-top: 20px;
        }

        .upload-text {
            font-size: 18px;
            color: #ffffff;
            margin-bottom: 15px;
            line-height: 1.6;
        }

        .email-container {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin: 20px 0;
            padding: 15px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .email-container:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: scale(1.02);
        }

        .email-container i {
            color: #ffcc00;
            font-size: 20px;
        }

        .email-link {
            color: #ffcc00;
            text-decoration: none;
            font-size: 18px;
            transition: all 0.3s ease;
            position: relative;
        }

        .email-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background: linear-gradient(90deg, #ffcc00, #ffffff, #ffcc00);
            background-size: 200% 100%;
            transition: width 0.3s ease;
        }

        .email-link:hover {
            color: #ffffff;
        }

        .email-link:hover::after {
            width: 100%;
        }

        .upload-note {
            font-size: 14px;
            color: rgba(255, 255, 255, 0.7);
            margin-top: 15px;
            font-style: italic;
        }

        @media (max-width: 768px) {
            .image-upload-section {
                padding: 20px;
            }

            .upload-text {
                font-size: 16px;
            }

            .email-link {
                font-size: 16px;
            }

            .email-container {
                padding: 10px;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
</head>

<body>

    <button class="theme-toggle">
        <i class="fas fa-sun"></i>
    </button>

    <header class="header">
        <img src="images/header.webp" alt="College Event">
    </header>

    <div class="welcome-text">
        <h1>Welcome to IT Department</h1>
    </div>

    <div class="container">
        <div class="category">
            <h2>Our College</h2>
            <p class="category-description">Our IT Department focuses on practical learning, coding skills, and latest
                technologies, preparing students for careers in software development, networking, and emerging tech
                domains.</p>
            <div class="gallery">
                <div class="classroom-video">
                    <video src="images/ourclg.m3u8" playsinline></video>
                    <div class="video-control">
                        <span class="video-hint">Click to play video</span>
                        <i class="fas fa-eye"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="category">
            <h2>Induction Program</h2>
            <p class="category-description">The induction program welcomes new IT students with workshops, tech talks,
                and team-building activities, helping them adapt to college life and understand the department's vision.
            </p>
            <div class="gallery">
                <div class="media"><img src="images/induction1.webp" alt="Induction 1"></div>
                <div class="media"><img src="images/induction2.webp" alt="Induction 2"></div>
                <div class="media"><img src="images/induction3.webp" alt="Induction 3"></div>
                <div class="media"><img src="images/induction4.webp" alt="Induction 4"></div>
                <div class="media"><img src="images/induction5.webp" alt="Induction 5"></div>
                <div class="media"><img src="images/induction6.webp" alt="Induction 6"></div>
                <div class="media"><img src="images/induction7.webp" alt="Induction 7"></div>
                <div class="media"><img src="images/induction8.webp" alt="Induction 8"></div>
                <div class="media"><img src="images/induction9.webp" alt="Induction 9"></div>
                <div class="media"><img src="images/induction10.webp" alt="Induction 10"></div>
                <div class="media"><img src="images/induction11.webp" alt="Induction 11"></div>
                <div class="media"><img src="images/induction12.webp" alt="Induction 12"></div>
            </div>
            <div class="classroom-video">
                <video src="images/inductionvid.m3u8" playsinline></video>
                <div class="video-control">
                    <span class="video-hint">Click to play video</span>
                    <i class="fas fa-eye"></i>
                </div>
            </div>
            <div class="classroom-video">
                <video src="images/inductvid3.m3u8" playsinline></video>
                <div class="video-control">
                    <span class="video-hint">Click to play video</span>
                    <i class="fas fa-eye"></i>
                </div>
            </div>
        </div>

        <div class="category">
            <h2>Classroom Activity</h2>
            <p class="category-description">Classroom activities like coding challenges, group discussions, and
                debugging sessions make IT concepts interactive, improving logical thinking and hands-on skills among
                students.</p>
            <div class="gallery-classroom">
                <div class="media-classroom"><img src="images/classact2.webp" alt="Classroom Activity 2"></div>
                <div class="media-classroom"><img src="images/classact3.webp" alt="Classroom Activity 3"></div>
                <div class="media-classroom"><img src="images/classact4.webp" alt="Classroom Activity 4"></div>
                <div class="media-classroom"><img src="images/classact5.webp" alt="Classroom Activity 5"></div>
                <div class="media-classroom"><img src="images/classact6.webp" alt="Classroom Activity 6"></div>
                <div class="media-classroom"><img src="images/classact7.webp" alt="Classroom Activity 7"></div>
                <div class="media-classroom"><img src="images/classact8.webp" alt="Classroom Activity 8"></div>
                <div class="media-classroom"><img src="images/classact9.webp" alt="Classroom Activity 9"></div>
                <div class="media-classroom"><img src="images/classact10.webp" alt="Classroom Activity 10"></div>
                <div class="media-classroom"><img src="images/classact11.webp" alt="Classroom Activity 11"></div>
                <div class="media-classroom"><img src="images/classact12.webp" alt="Classroom Activity 12"></div>
                <div class="media-classroom"><img src="images/classact13.webp" alt="Classroom Activity 13"></div>
                <div class="media-classroom"><img src="images/classact15.webp" alt="Classroom Activity 15"></div>
                <div class="media-classroom"><img src="images/classact16.webp" alt="Classroom Activity 16"></div>
                <div class="media-classroom"><img src="images/classact17.webp" alt="Classroom Activity 17"></div>
                <div class="media-classroom"><img src="images/classact19.webp" alt="Classroom Activity 19"></div>
            </div>
        </div>

        <div class="category">
            <h2>Student Activities</h2>
            <p class="category-description">IT students lead coding clubs, tech quizzes, app-building contests, and
                innovation fests, encouraging collaboration, creativity, and leadership in the tech domain.</p>
            <div class="gallery">
                <div class="media"><img src="images/studentact1.webp" alt="Student Activity 1"></div>
                <div class="media"><img src="images/studentact2.webp" alt="Student Activity 2"></div>
                <div class="media"><img src="images/studentact3.webp" alt="Student Activity 3"></div>
                <div class="media"><img src="images/studentact4.webp" alt="Student Activity 4"></div>
                <div class="media"><img src="images/studentact5.webp" alt="Student Activity 5"></div>
            </div>
        </div>

        <div class="category">
            <h2>Seminar</h2>
            <p class="category-description">Seminars in the IT department cover AI, cybersecurity, web development, and
                more, helping students stay updated with current trends and enhance technical understanding.</p>
            <div class="gallery">
                <div class="media"><img src="images/seminar1.webp" alt="Seminar 1"></div>
                <div class="media"><img src="images/seminar2.webp" alt="Seminar 2"></div>
                <div class="media"><img src="images/seminar3.webp" alt="Seminar 3"></div>
                <div class="media"><img src="images/seminar4.webp" alt="Seminar 4"></div>
                <div class="media"><img src="images/seminar5.webp" alt="Seminar 5"></div>
                <div class="media"><img src="images/seminar6.webp" alt="Seminar 6"></div>
                <div class="media"><img src="images/seminar7.webp" alt="Seminar 7"></div>
                <div class="media"><img src="images/seminar8.webp" alt="Seminar 8"></div>
                <div class="media"><img src="images/seminar9.webp" alt="Seminar 9"></div>
                <div class="media"><img src="images/seminar10.webp" alt="Seminar 10"></div>
                <div class="media"><img src="images/seminar11.webp" alt="Seminar 11"></div>
            </div>
        </div>

        <div class="category">
            <h2>Company Visit</h2>
            <p class="category-description">IT students visit tech companies to explore real-world software development,
                networking setups, and industry workflows, gaining valuable exposure to corporate work environments and
                technologies.</p>
            <div class="visit-gallery">
                <div class="thumbnail-gallery">
                    <div class="gallery">
                        <div class="media"><img src="images/visit1.webp" alt="Visit 1"></div>
                        <div class="media"><img src="images/visit2.webp" alt="Visit 2"></div>
                        <div class="media"><img src="images/visit3.webp" alt="Visit 3"></div>
                        <div class="media"><img src="images/visit4.webp" alt="Visit 4"></div>
                        <div class="media"><img src="images/visit6.webp" alt="Visit 6"></div>
                        <div class="media"><img src="images/visit7.webp" alt="Visit 7"></div>
                        <div class="media"><img src="images/visit8.webp" alt="Visit 8"></div>
                        <div class="media"><img src="images/visit9.webp" alt="Visit 9"></div>
                        <div class="media"><img src="images/visit10.webp" alt="Visit 10"></div>
                        <div class="media"><img src="images/visit11.webp" alt="Visit 11"></div>
                        <div class="media"><img src="images/visit12.webp" alt="Visit 12"></div>
                        <div class="media"><img src="images/visit13.webp" alt="Visit 13"></div>
                        <div class="media"><img src="images/visit14.webp" alt="Visit 14"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="category">
            <h2>Yoga Activities</h2>
            <p class="category-description">Yoga helps IT students manage screen time stress, improve focus, and
                maintain well-being through breathing exercises, meditation, and regular wellness sessions.</p>
            <div class="gallery">
                <div class="media"><img src="images/yoga1.webp" alt="Yoga 1"></div>
                <div class="media"><img src="images/yoga2.webp" alt="Yoga 2"></div>
                <div class="media"><img src="images/yoga4.webp" alt="Yoga 4"></div>
                <div class="media"><img src="images/yoga5.webp" alt="Yoga 5"></div>
            </div>
        </div>

        <div class="category">
            <h2>Teacher Day Celebration</h2>
            <p class="category-description">IT students celebrate Teachers' Day with tech-themed programs, games, and
                gratitude activities to honor faculty for their mentorship, dedication, and contribution to tech
                education.</p>
            <div class="gallery">
                <div class="media"><img src="images/teacher2.webp" alt="Teachers celebrating together"></div>
                <div class="media"><img src="images/teacher3.webp" alt="Students with their teacher"></div>
                <div class="media"><img src="images/teacher1.webp" alt="Teacher receiving appreciation"></div>
            </div>
            <div class="classroom-video">
                <video src="images/teachervid.m3u8" playsinline></video>
                <div class="video-control">
                    <span class="video-hint">Click to play video</span>
                    <i class="fas fa-eye"></i>
                </div>
            </div>
        </div>

        <div class="category">
            <h2>Card Making Competition</h2>
            <p class="category-description">IT students creatively integrate tech elements like QR codes or circuit
                patterns in card designs, blending artistic skills with a love for innovation.</p>
            <div class="gallery">
                <div class="media"><img src="images/card1.webp" alt="College Highlight 1"></div>
                <div class="media"><img src="images/card2.webp" alt="College Highlight 2"></div>
                <div class="media"><img src="images/card3.webp" alt="College Highlight 3"></div>
                <div class="media"><img src="images/card4.webp" alt="College Highlight 4"></div>
            </div>
        </div>

        <div class="category">
            <h2>Rangoli Competition</h2>
            <p class="category-description">IT students creatively blend traditional rangoli with tech-inspired designs,
                showcasing binary art, logos, and digital themes to celebrate culture with a technological twist.</p>
            <div class="gallery">
                <div class="media"><img src="images/rangoli1.webp" alt="Rangoli 1"></div>
                <div class="media"><img src="images/rangoli2.webp" alt="Rangoli 2"></div>
                <div class="media"><img src="images/rangoli3.webp" alt="Rangoli 3"></div>
            </div>
        </div>

        <div class="category">
            <h2>Janmashtami Celebration</h2>
            <p class="category-description">IT students celebrate Janmashtami with tech-themed decorations and cultural
                programs, blending traditional festivities with modern technology.</p>
            <div class="gallery">
                <div class="media"><img src="images/janmastami6.webp" alt="Janmashtami 6"></div>
                <div class="media"><img src="images/janmastami8.webp" alt="Janmashtami 8"></div>
                <div class="media"><img src="images/janmastami7.webp" alt="Janmashtami 7"></div>
                <div class="media"><img src="images/janmastami5.webp" alt="Janmashtami 5"></div>
                <div class="media"><img src="images/janmastami2.webp" alt="Janmashtami 2"></div>
                <div class="media"><img src="images/janmastami4.webp" alt="Janmashtami 4"></div>
                <div class="media"><img src="images/janmastami3.webp" alt="Janmashtami 3"></div>
            </div>
        </div>

        <div class="category">
            <h2>Sports Day</h2>
            <p class="category-description">IT students actively participate in Sports Day, promoting fitness and
                teamwork beyond the screen, balancing physical health with academic and technical pursuits.</p>
            <div class="gallery">
                <div class="media"><img src="images/sports2.webp" alt="Sports 2"></div>
                <div class="media"><img src="images/sports1.webp" alt="Sports 1"></div>
                <div class="media"><img src="images/sports3.webp" alt="Sports 3"></div>
                <div class="media"><img src="images/sport4.webp" alt="Sports 4"></div>
                <div class="media"><img src="images/sport5.webp" alt="Sports 5"></div>
                <div class="media"><img src="images/sport6.webp" alt="Sports 6"></div>
                <div class="media"><img src="images/sport7.webp" alt="Sports 7"></div>
                <div class="media"><img src="images/sport8.webp" alt="Sports 18"></div>
                <div class="media"><img src="images/sport9.webp" alt="Sports 19"></div>
                <div class="media"><img src="images/sport10.webp" alt="Sports 10"></div>
                <div class="media"><img src="images/sport11.webp" alt="Sports 11"></div>
                <div class="media"><img src="images/sport12.webp" alt="Sports 12"></div>
                <div class="media"><img src="images/sport13.webp" alt="Sports 13"></div>
                <div class="media"><img src="images/sport14.webp" alt="Sports 14"></div>
                <div class="media"><img src="images/sport15.webp" alt="Sports 15"></div>
                <div class="media"><img src="images/sport16.webp" alt="Sports 16"></div>
                <div class="media"><img src="images/sport17.webp" alt="Sports 17"></div>
                <div class="media"><img src="images/sport20.webp" alt="Sports 20"></div>
                <div class="media"><img src="images/sport21.webp" alt="Sports 21"></div>
                <div class="media"><img src="images/sport22.webp" alt="Sports 22"></div>
                <div class="media"><img src="images/sport23.webp" alt="Sports 23"></div>
            </div>
            <div class="classroom-video">
                <video src="images/sportvid.m3u8" playsinline></video>
                <div class="video-control">
                    <span class="video-hint">Click to play video</span>
                    <i class="fas fa-eye"></i>
                </div>
            </div>
            <div class="classroom-video">
                <video src="images/sportvid2.m3u8" playsinline></video>
                <div class="video-control">
                    <span class="video-hint">Click to play video</span>
                    <i class="fas fa-eye"></i>
                </div>
            </div>
            <div class="classroom-video">
                <video src="images/sportvid3.m3u8" playsinline></video>
                <div class="video-control">
                    <span class="video-hint">Click to play video</span>
                    <i class="fas fa-eye"></i>
                </div>
            </div>
        </div>

        <div class="category">
            <h2>Our Faculty</h2>
            <p class="category-description">IT faculties are tech-savvy, supportive, and skilled in modern programming,
                guiding students in projects, innovation, and career development with dedication and expertise.</p>
            <div class="gallery">
                <div class="media"><img src="images/faculty1.webp" alt="Faculty 1"></div>
                <div class="media"><img src="images/faculty2.webp" alt="Faculty 2"></div>
                <div class="media"><img src="images/faculty3.webp" alt="Faculty 3"></div>
                <div class="media"><img src="images/faculty4.webp" alt="Faculty 4"></div>
                <div class="media"><img src="images/faculty5.webp" alt="Faculty 5"></div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3>Contact Us</h3>
                <p><strong>Address:</strong><br>
                    Tapi Diploma Engineering College,<br>
                    Shree Swami Atmanand Saraswati Vidya Sankul,<br>
                    Kapodra, Varachha Road,<br>
                    Surat – 395 006.</p>
                <p><strong>Email:</strong><br>
                    <a href="mailto:tapidiploma@gmail.com">tapidiploma@gmail.com</a>
                </p>
            </div>

            <div class="footer-section">
                <h3> Event</h3>
                <p class="celebration-text">
                    <span class="celebration-highlight">Harmony and Gyanotsav 2025</span><br>
                    This April at Tapi Diploma Engineering College
                </p>
                <p>Join us for an extraordinary celebration of talent, innovation, and creativity! The Harmony and
                    Gyanotsav 2025 promises to be a spectacular showcase of our students' exceptional abilities across
                    various domains. From mesmerizing cultural performances that will captivate your senses to
                    cutting-edge technical exhibitions that demonstrate our students' engineering prowess, this event is
                    set to be a perfect blend of tradition and innovation. Experience the vibrant atmosphere as our
                    campus transforms into a hub of creativity, where every corner will tell a story of talent,
                    dedication, and achievement. Don't miss this grand celebration of excellence!</p>
            </div>

            <div class="footer-section image-upload-section">
                <h3>Add Your Image Here</h3>
                <div class="upload-info">
                    <p class="upload-text">Want to showcase your moments on our site? Send us your photos!</p>
                    <div class="email-container">
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:futureisbright404@gmail.com" class="email-link">futureisbright404@gmail.com</a>
                    </div>
                    <p class="upload-note">We'll review and add your images to our gallery</p>
                </div>
            </div>
        </div>

        <div class="creator-credit">
            <p>Created by <span>henil shingala</span></p>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const descriptions = document.querySelectorAll('.category-description');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const description = entry.target;
                        const rect = description.getBoundingClientRect();
                        const delay = Math.max(0, rect.top / window.innerHeight) * 500;

                        setTimeout(() => {
                            description.classList.add('visible');
                        }, delay);
                    }
                });
            }, {
                threshold: 0.2,
                rootMargin: '0px 0px -50px 0px'
            });

            descriptions.forEach(description => {
                observer.observe(description);
            });

            let lastScrollTop = 0;
            window.addEventListener('scroll', () => {
                const currentScroll = window.pageYOffset || document.documentElement.scrollTop;

                descriptions.forEach(description => {
                    const rect = description.getBoundingClientRect();
                    if (rect.top < window.innerHeight * 0.8 && rect.bottom > 0) {
                        if (!description.classList.contains('visible')) {
                            description.classList.add('visible');
                        }
                    }
                });

                lastScrollTop = currentScroll;
            });

            const themeToggle = document.querySelector('.theme-toggle');
            const body = document.body;
            const icon = themeToggle.querySelector('i');

            const savedTheme = localStorage.getItem('theme');
            if (savedTheme === 'dark') {
                body.classList.add('dark-mode');
                icon.classList.remove('fa-sun');
                icon.classList.add('fa-moon');
            }

            themeToggle.addEventListener('click', () => {
                body.classList.toggle('dark-mode');
                if (body.classList.contains('dark-mode')) {
                    icon.classList.remove('fa-sun');
                    icon.classList.add('fa-moon');
                    localStorage.setItem('theme', 'dark');
                } else {
                    icon.classList.remove('fa-moon');
                    icon.classList.add('fa-sun');
                    localStorage.setItem('theme', 'light');
                }
            });

            const videoContainers = document.querySelectorAll('.classroom-video');

            function isInViewport(element) {
                const rect = element.getBoundingClientRect();
                return (
                    rect.top >= 0 &&
                    rect.left >= 0 &&
                    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                );
            }

            function handleVideoVisibility() {
                videoContainers.forEach(container => {
                    const video = container.querySelector('video');
                    if (!isInViewport(container)) {
                        video.pause();
                        video.currentTime = 0;
                    }
                });
            }

            window.addEventListener('scroll', handleVideoVisibility);

            videoContainers.forEach(container => {
                const video = container.querySelector('video');
                const control = container.querySelector('.video-control');
                const videoSrc = video.getAttribute('src');

                if (videoSrc.endsWith('.m3u8')) {
                    if (Hls.isSupported()) {
                        const hls = new Hls();
                        hls.loadSource(videoSrc);
                        hls.attachMedia(video);
                        hls.on(Hls.Events.MANIFEST_PARSED, function () {
                            video.pause();
                        });
                    }
                    else if (video.canPlayType('application/vnd.apple.mpegurl')) {
                        video.src = videoSrc;
                        video.addEventListener('loadedmetadata', function () {
                            video.pause();
                        });
                    }
                }

                video.currentTime = 0;
                video.pause();

                control.addEventListener('click', function () {
                    const icon = this.querySelector('i');
                    if (video.paused) {
                        video.play().catch(e => console.log("Play error:", e));
                        icon.classList.remove('fa-eye');
                        icon.classList.add('fa-eye-slash');
                    } else {
                        video.pause();
                        video.currentTime = 0;
                        icon.classList.remove('fa-eye-slash');
                        icon.classList.add('fa-eye');
                    }
                });

                video.addEventListener('ended', function () {
                    const icon = control.querySelector('i');
                    icon.classList.remove('fa-eye-slash');
                    icon.classList.add('fa-eye');
                });

                video.addEventListener('pause', function () {
                    const icon = control.querySelector('i');
                    icon.classList.remove('fa-eye-slash');
                    icon.classList.add('fa-eye');
                });

                video.addEventListener('play', function () {
                    const icon = control.querySelector('i');
                    icon.classList.remove('fa-eye');
                    icon.classList.add('fa-eye-slash');
                });
            });
        });

        document.addEventListener('contextmenu', event => event.preventDefault());

        document.addEventListener('keyup', function (e) {
            if (e.key === 'PrintScreen') {
                alert('Screenshots are disabled!');
                navigator.clipboard.writeText('');
            }
        });

        document.addEventListener('dragstart', function (e) {
            e.preventDefault();
        });

        document.addEventListener('visibilitychange', function () {
            if (document.hidden) {
                document.body.classList.add('blur');
            } else {
                document.body.classList.remove('blur');
            }
        });

        const debounce = (func, wait) => {
            let timeout;
            return function executedFunction(...args) {
                const later = () => {
                    clearTimeout(timeout);
                    func(...args);
                };
                clearTimeout(timeout);
                timeout = setTimeout(later, wait);
            };
        };

        const throttle = (func, limit) => {
            let inThrottle;
            return function executedFunction(...args) {
                if (!inThrottle) {
                    func(...args);
                    inThrottle = true;
                    setTimeout(() => inThrottle = false, limit);
                }
            };
        };

        const optimizedScroll = debounce(() => {
            const scrollPosition = window.scrollY;
            document.body.style.setProperty('--scroll', scrollPosition);
        }, 16);

        window.addEventListener('scroll', optimizedScroll);

        const preloadImages = () => {
            const images = document.querySelectorAll('img[data-src]');
            images.forEach(img => {
                const src = img.getAttribute('data-src');
                const link = document.createElement('link');
                link.rel = 'preload';
                link.as = 'image';
                link.href = src;
                document.head.appendChild(link);
            });
        };

        if ('requestIdleCallback' in window) {
            requestIdleCallback(preloadImages);
        } else {
            setTimeout(preloadImages, 0);
        }

        if ('serviceWorker' in navigator) {
            window.addEventListener('load', () => {
                navigator.serviceWorker.register('/sw.js')
                    .then(registration => {
                        console.log('ServiceWorker registration successful');
                    })
                    .catch(err => {
                        console.log('ServiceWorker registration failed: ', err);
                    });
            });
        }

        window.onerror = function (msg, url, lineNo, columnNo, error) {
            console.error('Error: ' + msg + '\nURL: ' + url + '\nLine: ' + lineNo + '\nColumn: ' + columnNo + '\nError object: ' + JSON.stringify(error));
            return false;
        };

        const performanceObserver = new PerformanceObserver((list) => {
            for (const entry of list.getEntries()) {
                console.log(`Resource: ${entry.name}, Load time: ${entry.duration}ms`);
            }
        });

        performanceObserver.observe({ entryTypes: ['resource'] });
    </script>

</body>

</html>