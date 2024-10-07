<?php
$name = "人皇";
$title = "一个想为大家提供一些有用服务的小市民"; 
$description = "我热衷躺平";
$avatar = "https://6ke.li/wp-content/uploads/2024/08/20240803111600573-1722654960-renhuangV2.jpg";
$skills = [
    ["CV工程师", "fa-code"],
    // ["阅片高手", "fa-palette"],
    ["圈钱", "fa-money-bill-wave"],
    ["项目管理", "fa-tasks"],
    ["当雷锋", "fa-user-friends"]
];
$social_links = [
    ["fab fa-github", "https://github.com/yigehaozi", "GitHub"],
    ["fab fa-twitter", "https://6ke.li", "Twitter"],
    ["fab fa-linkedin-in", "https://6ke.li", "LinkedIn"],
    ["fas fa-envelope", "mailto:6@6.ke", "Email"]
];
$projects = [
    ["6KE论坛", "一个充满活力的在线社区平台", "https://6ke.li/wp-content/uploads/2024/08/20240803111600573-1722654960-renhuangV2.jpg", "fas fa-comments"],
    ["6KE论坛", "一个充满活力的在线社区平台", "https://6ke.li/wp-content/uploads/2024/08/20240803111600573-1722654960-renhuangV2.jpg", "fas fa-comments"],
    ["6KE论坛", "一个充满活力的在线社区平台", "https://6ke.li/wp-content/uploads/2024/08/20240803111600573-1722654960-renhuangV2.jpg", "fas fa-comments"],
    ["6KE论坛", "一个充满活力的在线社区平台", "https://6ke.li/wp-content/uploads/2024/08/20240803111600573-1722654960-renhuangV2.jpg", "fas fa-comments"],
    ["6KE论坛", "一个充满活力的在线社区平台", "https://6ke.li/wp-content/uploads/2024/08/20240803111600573-1722654960-renhuangV2.jpg", "fas fa-comments"],
    ["6KE论坛", "一个充满活力的在线社区平台", "https://6ke.li/wp-content/uploads/2024/08/20240803111600573-1722654960-renhuangV2.jpg", "fas fa-comments"],
    ["6KE论坛", "一个充满活力的在线社区平台", "https://6ke.li/wp-content/uploads/2024/08/20240803111600573-1722654960-renhuangV2.jpg", "fas fa-comments"],
    ["6KE论坛", "一个充满活力的在线社区平台", "https://6ke.li/wp-content/uploads/2024/08/20240803111600573-1722654960-renhuangV2.jpg", "fas fa-comments"],

];
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name; ?> - 创意个人主页</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>
    <style>
        :root {
            --bg-color: #f5f5f5;
            --text-color: #333;
            --secondary-bg: #fff;
            --accent-color: #006eff;
            --background-light: linear-gradient(-45deg, #e6f2ff, #fff0f5, #f0f7ff, #fff5e6);
            --background-dark: linear-gradient(-45deg, #1a202c, #2d3748, #4a5568, #2d3748);
        }
        .dark-mode {
            --bg-color: #121212;
            --text-color: #f5f5f5;
            --secondary-bg: #1f1f1f;
            --accent-color: #3498db;
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Poppins', sans-serif;
            background: var(--background-light);
            color: var(--text-color);
            overflow-x: hidden;
            transition: background 0.3s, color 0.3s;
            background-size: 400% 400%;
            animation: gradientBG 15s ease infinite;
        }
        body.dark-mode {
            background: var(--background-dark);
        }
        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        header {
            padding: 20px 0;
            position: fixed;
            width: 100%;
            z-index: 1000;
            transition: background-color 0.3s;
            backdrop-filter: blur(10px);
        }
        .dark-mode header {
            background-color: rgba(18, 18, 18, 0.8);
        }
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--text-color);
            transition: color 0.3s;
        }
        .nav-links a {
            color: var(--text-color);
            text-decoration: none;
            margin-left: 20px;
            position: relative;
            transition: color 0.3s;
        }
        .nav-links a::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: var(--accent-color);
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }
        .nav-links a:hover::after {
            transform: scaleX(1);
        }
        .hero {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
            padding-top: 80px;
        }
        .hero-content {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            gap: 50px;
            text-align: center;
            z-index: 1;
            max-width: 1000px;
            margin: 0 auto;
        }
        .hero-text {
            flex: 1;
            min-width: 300px;
        }
        .avatar-container {
            flex: 0 0 auto;
        }
        .avatar {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            border: 4px solid var(--accent-color);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .avatar:hover {
            transform: scale(1.05);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }
        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            color: var(--text-color);
        }
        .hero p {
            font-size: 1.2rem;
            max-width: 600px;
            margin-bottom: 30px;
            color: var(--text-color);
        }
        .social-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }
        .social-links a {
            color: var(--text-color);
            font-size: 1.8rem;
            transition: color 0.3s ease, transform 0.3s ease;
        }
        .social-links a:hover {
            color: var(--accent-color);
            transform: translateY(-3px);
        }
        .cta-container {
            margin-top: 30px;
            text-align: center;
        }
        .cta-btn {
            display: inline-block;
            background-color: var(--accent-color);
            color: #fff;
            border: none;
            padding: 12px 30px;
            font-size: 1.1rem;
            text-decoration: none;
            border-radius: 30px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .cta-btn:hover {
            background-color: var(--text-color);
            color: var(--bg-color);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        .shape {
            position: absolute;
            border-radius: 50%;
            opacity: 0.1;
        }
        .shape-1 {
            width: 300px;
            height: 300px;
            background-color: var(--accent-color);
            top: -150px;
            left: -150px;
            animation: float 6s ease-in-out infinite;
        }
        .shape-2 {
            width: 200px;
            height: 200px;
            background-color: var(--accent-color);
            bottom: -100px;
            right: -100px;
            animation: float 8s ease-in-out infinite;
        }
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }
        .skills, .projects {
            padding: 100px 0;
        }
        .skills h2, .projects h2 {
            font-size: 2.5rem;
            margin-bottom: 50px;
            text-align: center;
            color: var(--text-color);
        }
        .skills-grid, .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }
        .skill-item {
            background-color: var(--secondary-bg);
            padding: 30px;
            border-radius: 15px;
            text-align: center;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .skill-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }
        .skill-item h3 {
            color: var(--text-color);
            font-size: 1.2rem;
            margin-top: 15px;
        }
        .skill-icon {
            font-size: 2.5rem;
            color: var(--accent-color);
            margin-bottom: 15px;
        }
        .project-item {
            position: relative;
            height: 250px;
            border-radius: 15px;
            overflow: hidden;
            cursor: pointer;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }
        .project-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
        }
        .project-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        .project-item:hover img {
            transform: scale(1.1);
        }
        .project-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            opacity: 0;
            transition: opacity 0.3s ease;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        .project-item:hover .project-overlay {
            opacity: 1;
        }
        .project-info {
            text-align: center;
            color: #fff;
            transform: translateY(20px);
            opacity: 0;
            transition: all 0.3s ease;
        }
        .project-item:hover .project-info {
            transform: translateY(0);
            opacity: 1;
        }
        .project-title {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: #fff;
        }
        .project-info p {
            font-size: 0.9rem;
            margin-bottom: 15px;
        }
        .project-icon {
            font-size: 2.5rem;
            color: var(--accent-color);
            margin-bottom: 15px;
        }
        .theme-toggle {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1001;
            background: none;
            border: none;
            cursor: pointer;
            font-size: 1.5rem;
            color: var(--text-color);
            transition: color 0.3s;
        }
        .theme-toggle:hover {
            color: var(--accent-color);
        }
        .theme-toggle::before {
            font-family: "Font Awesome 5 Free";
            content: "\f185";
            font-weight: 400;
        }
        .dark-mode .theme-toggle::before {
            content: "\f186";
            font-weight: 400;  
        }
        footer {
            background-color: var(--secondary-bg);
            color: var(--text-color);
            text-align: center;
            padding: 20px 0;
            margin-top: 50px;
        }
        @media (max-width: 768px) {
            .hero-content {
                flex-direction: column;
            }
            .hero h1 {
                font-size: 2.5rem;
            }
            .hero p {
                font-size: 1rem;
            }
            .nav-links {
                display: none;
            }
            .skills-grid, .projects-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav class="container">
            <div class="logo"><?php echo $name; ?></div>
            <div class="nav-links">
                <a href="#home">首页</a>
                <a href="#skills">技能</a>
                <a href="#projects">项目</a>
            </div>
        </nav>
    </header>

    <button class="theme-toggle" onclick="toggleTheme()"></button>

    <section id="home" class="hero">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="hero-content">
            <div class="avatar-container">
                <img src="<?php echo $avatar; ?>" alt="<?php echo $name; ?>" class="avatar">
            </div>
            <div class="hero-text">
                <h1><?php echo $name; ?></h1>
                <p><?php echo $title; ?></p>
                <p><?php echo $description; ?></p>
                <div class="social-links">
                    <?php foreach ($social_links as $link): ?>
                        <a href="<?php echo $link[1]; ?>" title="<?php echo $link[2]; ?>" target="_blank"><i class="<?php echo $link[0]; ?>"></i></a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="cta-container">
            <a href="#projects" class="cta-btn">查看我的作品</a>
        </div>
    </section>

<section id="skills" class="skills">
    <div class="container">
        <h2>我的能力</h2>
        <div class="skills-grid">
            <?php foreach ($skills as $skill): ?>
                <div class="skill-item">
                    <i class="skill-icon fas <?php echo $skill[1]; ?>"></i>
                    <h3><?php echo $skill[0]; ?></h3>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

    <section id="projects" class="projects">
        <div class="container">
            <h2>我的作品</h2>
            <div class="projects-grid">
                <?php foreach ($projects as $project): ?>
                    <div class="project-item">
                        <img src="<?php echo $project[2]; ?>" alt="<?php echo $project[0]; ?>">
                        <div class="project-overlay">
                            <i class="project-icon <?php echo $project[3]; ?>"></i>
                            <div class="project-info">
                                <h3 class="project-title"><?php echo $project[0]; ?></h3>
                                <p><?php echo $project[1]; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> <?php echo $name; ?>. 保留所有权利。</p>
        </div>
    </footer>

    <script>
        gsap.registerPlugin(ScrollTrigger);

        // 首页动画
        gsap.from(".avatar", {opacity: 0, scale: 0.5, duration: 1, delay: 0.2});
        gsap.from(".hero h1", {opacity: 0, y: 50, duration: 1, delay: 0.5});
        gsap.from(".hero p", {opacity: 0, y: 50, duration: 1, delay: 0.8, stagger: 0.3});
        gsap.from(".social-links a", {opacity: 0, y: 50, duration: 1, delay: 1.1, stagger: 0.1});
        gsap.from(".cta-btn", {opacity: 0, y: 50, duration: 1, delay: 1.4});
        
        // 技能部分动画
        gsap.from(".skill-item", {
            scrollTrigger: {
                trigger: ".skills",
                start: "top 80%",
            },
            opacity: 0, 
            y: 50,
            duration: 0.8,
            stagger: 0.2
        });

        // 项目部分动画
        gsap.from(".project-item", {
            scrollTrigger: {
                trigger: ".projects", 
                start: "top 80%",
            },
            opacity: 0,
            y: 50, 
            duration: 0.8,
            stagger: 0.2
        });

        // 主题切换功能
        function toggleTheme() {
            document.body.classList.toggle('dark-mode');
        }

        // 平滑滚动
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>