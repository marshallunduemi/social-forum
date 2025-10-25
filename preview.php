<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reddit</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Poppins:wght@400;500;700&display=swap">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <style>
    :root {
        --reddit-orange: #ff4500;
        --reddit-blue: #0079d3;
    }

    [data-theme="dark"] {
        --bg-dark: #030303;
        --bg-secondary: #1a1a1b;
        --bg-tertiary: #272729;
        --text-primary: #d7dadc;
        --text-secondary: #818384;
        --border-color: #343536;
    }

    [data-theme="light"] {
        --bg-dark: #ecedeeff;
        --bg-secondary: #ffffff;
        --bg-tertiary: #f6f7f8;
        --text-primary: #1c1c1c;
        --text-secondary: #7c7c7c;
        --border-color: #ccc;
    }

    body {
        background-color: var(--bg-dark);
        color: var(--text-primary);
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, sans-serif;
        transition: background-color 0.3s, color 0.3s;
    }

    /* Navbar */
    .navbar {
        background-color: var(--bg-secondary);
        border-bottom: 1px solid var(--border-color);
        /* padding: 0.5rem 1rem; */
    }

    .navbarx {
        background-color: var(--bg-secondary);
        /* border-bottom: 1px solid var(--border-color); */
        /* padding: 0.5rem 1rem; */
    }

    navbar>.container,
    .navbar>.container-fluid,
    .navbar>.container-sm,
    .navbar>.container-md,
    .navbar>.container-lg,
    .navbar>.container-xl,
    .navbar>.container-xxl {
        display: -webkit-box;
        display: -ms-flexbox;
        /* display: flex
; */
        -ms-flex-wrap: inherit;
        flex-wrap: inherit;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
    }

    .navbar-brand {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: var(--text-primary) !important;
        font-weight: bold;
        font-size: 1.5rem;
    }

    .reddit-logo {
        width: 32px;
        height: 32px;
        background-color: var(--reddit-orange);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
    }

    .search-box {
        background-color: var(--bg-tertiary);
        border: 1px solid var(--border-color);
        border-radius: 5px;
        padding: 0.5rem 1rem;
        width: 100%;
        max-width: 600px;
        color: var(--text-primary);
    }

    .search-box:focus {
        outline: none;
        border-color: var(--reddit-blue);
        background-color: var(--bg-secondary);
    }

    .btn-get-app {
        background-color: transparent;
        border: 1px solid var(--text-primary);
        color: var(--text-primary);
        padding: 0.4rem 1rem;
        border-radius: 20px;
        margin-right: 0.5rem;
    }

    .btn-login {
        background-color: var(--reddit-orange);
        border: none;
        color: white;
        padding: 0.4rem 1.5rem;
        border-radius: 5px;
        font-weight: 600;
    }

    /* Sidebar */
    .sidebar {
        background-color: var(--bg-secondary);
        height: 100vh;
        position: fixed;
        left: 0;
        top: 56px;
        width: 260px;
        overflow-y: auto;
        padding: 1rem 0;
        border-right: 1px solid var(--border-color);

        /* Hide scrollbar */
        scrollbar-width: none;
        /* Firefox */
        -ms-overflow-style: none;
        /* Internet Explorer 10+ */
    }

    .sidebar::-webkit-scrollbar {
        display: none;
        /* Chrome, Safari, Opera */
    }


    .sidebar-item {
        padding: 0.75rem 1.5rem;
        color: var(--text-primary);
        text-decoration: none;
        display: flex;
        align-items: center;
        gap: 1rem;
        transition: background 0.2s;
    }

    .sidebar-item:hover {
        background-color: var(--bg-tertiary);
        color: var(--text-primary);
    }

    .sidebar-section {
        padding: 0.5rem 1.5rem;
        color: var(--text-secondary);
        font-size: 0.7rem;
        text-transform: uppercase;
        font-weight: 600;
        margin-top: 1rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .topic-item {
        padding: 0.5rem 1.5rem;
        color: var(--text-primary);
        text-decoration: none;
        display: flex;
        align-items: center;
        justify-content: space-between;
        transition: background 0.2s;
    }

    .topic-item:hover {
        background-color: var(--bg-tertiary);
    }

    .beta-badge {
        background-color: var(--reddit-orange);
        color: white;
        font-size: 0.6rem;
        padding: 0.1rem 0.4rem;
        border-radius: 3px;
        margin-left: 0.5rem;
    }

    /* Main Content */
    .main-content {
        margin-left: 250px;
        margin-top: 56px;
        /* padding: 1rem; */
    }

    /* Story Cards */
    .story-carousel {
        display: flex;
        gap: 1rem;
        overflow-x: auto;
        margin-bottom: 2rem;
        padding-bottom: 1rem;
        margin-top: 40px;

        /* Hide scrollbar */
        scrollbar-width: none;
        /* Firefox */
        -ms-overflow-style: none;
        /* Internet Explorer 10+ */
    }


    .story-carousel::-webkit-scrollbar {
        /* height: 8px; */
        display: none;
        /* Chrome, Safari, Opera */
    }

    .story-carousel::-webkit-scrollbar-track {
        /* background: var(--bg-secondary); */
        display: none;
        /* Chrome, Safari, Opera */
    }

    .story-carousel::-webkit-scrollbar-thumb {
        /* /* background: var(--bg-tertiary); */
        border-radius: 4px;
        */ display: none;
        /* Chrome, Safari, Opera */
    }

    .story-card {
        min-width: 300px;
        height: 200px;
        border-radius: 12px;
        overflow: hidden;
        position: relative;
        cursor: pointer;
    }

    .story-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .story-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(transparent, rgba(0, 0, 0, 0.8));
        padding: 1rem;
        color: white;
    }

    .story-title {
        font-weight: 600;
        font-size: 1rem;
        margin-bottom: 0.25rem;
    }

    .story-subtitle {
        font-size: 0.85rem;
        opacity: 0.9;
    }

    .story-source {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        margin-top: 0.5rem;
        font-size: 0.8rem;
    }

    /* Feed Controls */
    .feed-controls {
        display: flex;
        gap: 1rem;
        margin-bottom: 1rem;
        align-items: center;
        background: var(--bg-secondary);
        padding: 10px;
        border-radius: 10px;
    }

    .feed-btn {
        background-color: transparent;
        border: none;
        color: var(--text-secondary);
        padding: 0.5rem 1rem;
        border-radius: 20px;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        cursor: pointer;
    }

    .feed-btn:hover {
        background-color: var(--bg-tertiary);
    }

    .feed-btn.active {
        background-color: var(--bg-tertiary);
        color: var(--text-primary);
    }

    /* Post Card */
    .post-card {
        background-color: var(--bg-secondary);
        border: 1px solid var(--border-color);
        border-radius: 8px;
        margin-bottom: 1rem;
        overflow: hidden;
    }

    .post-header {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.75rem 1rem;
    }

    .post-avatar {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background-color: var(--reddit-orange);
    }

    .post-subreddit {
        color: var(--text-primary);
        font-weight: 600;
        font-size: 0.85rem;
        text-decoration: none;
    }

    .post-time {
        color: var(--text-secondary);
        font-size: 0.8rem;
    }

    .post-title {
        padding: 0 1rem 0.5rem;
        font-size: 1.1rem;
        /* font-weight: 500; */
        color: var(--text-primary);
    }

    .post-image {
        width: 100%;
        max-height: 600px;
        object-fit: contain;
        background-color: var(--bg-dark);
    }

    .post-actions {
        display: flex;
        gap: 0.5rem;
        padding: 0.5rem 1rem;
        border-top: 1px solid var(--border-color);
    }

    .post-action-btn {
        background-color: transparent;
        border: none;
        color: var(--text-secondary);
        padding: 0.5rem 1rem;
        border-radius: 4px;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        cursor: pointer;
        font-size: 0.9rem;
    }

    .post-action-btn:hover {
        background-color: var(--bg-tertiary);
    }

    /* Right Sidebar */
    .right-sidebar {
        position: sticky;
        top: 70px;
        height: fit-content;
        right: 0;
        /* top: 56px; */
        width: 320px;
        padding: 1rem;
        /* height: calc(100vh - 56px); */
        overflow-y: auto;
    }

    .popular-communities {
        background-color: var(--bg-secondary);
        border: 1px solid var(--border-color);
        border-radius: 8px;
        padding: 1rem;
    }

    .section-title {
        font-size: 0.7rem;
        text-transform: uppercase;
        color: var(--text-secondary);
        margin-bottom: 1rem;
        font-weight: 600;
    }

    .community-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0.75rem 0;
        border-bottom: 1px solid var(--border-color);
    }

    .community-item:last-child {
        border-bottom: none;
    }

    .community-info {
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }

    .community-avatar {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background-color: var(--reddit-blue);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .community-name {
        font-weight: 500;
        font-size: 0.9rem;
    }

    .community-members {
        font-size: 0.8rem;
        color: var(--text-secondary);
    }

    .btn-join {
        background-color: var(--reddit-blue);
        border: none;
        color: white;
        padding: 0.4rem 1.2rem;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 600;
        cursor: pointer;
    }

    /* Mobile Responsive */
    @media (max-width: 1200px) {
        .right-sidebar {
            display: none;
        }

        .main-content {
            margin-right: 0;
        }
    }

    @media (max-width: 768px) {
        .sidebar {
            transform: translateX(-100%);
            transition: transform 0.3s;
            z-index: 1000;
        }

        .sidebar.show {
            transform: translateX(0);
        }

        .main-content {
            margin-left: 0;
        }

        .story-card {
            min-width: 250px;
        }

        .search-box {
            max-width: 100%;
        }

        .navbar-controls {
            display: none;
        }

        .hamburger {
            display: block !important;
        }
    }

    .hamburger {
        display: none;
        background: transparent;
        border: none;
        color: var(--text-primary);
        font-size: 1.5rem;
        cursor: pointer;
    }

    .theme-toggle {
        background: none;
        border: none;
        color: var(--text-primary);
        cursor: pointer;
        font-size: 1.2rem;
    }

    .join-btn:hover {
        background-color: #0041a3;
    }

    .thread-content {
        background-color: var(--card-bg);
        border: 1px solid var(--border-color);
        border-radius: 4px;
        padding: 20px;
        margin-bottom: 16px;
    }

    .thread-body {
        font-size: 0.95rem;
        line-height: 1.6;
        margin-top: 16px;
        color: var(--text-primary);
    }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <!-- <button class="hamburger" onclick="toggleSidebar()">
                <i class="fas fa-bars"></i>
            </button> -->
            <a class="navbar-brand" href="#">
                <!-- <div class="reddit-logo">
                    <i class="fab fa-reddit-alien"></i>
                </div> -->
                <img src="assets/images/favicon.png" alt="" width="40">
                <span class="d-none d-lg-block">Sabitalk</span>
            </a>
            <ul class="navbarx nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="showHome()"><i class="fas fa-compass"></i> Explore</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-fire"></i> Popular</a>
                </li>
            </ul>
            <div class="flex-grow-1 mx-4">
                <input type="text" class="search-box " placeholder="Search Reddit">
            </div>
            <div class="navbar-controls d-flex align-items-center d-none d-lg-block">
                <!-- <button class="btn-get-app">
                    <i class="fas fa-qrcode"></i> Get App
                </button> -->
                <button class="theme-toggle me-3" onclick="toggleTheme()">
                    <i class="fas fa-sun" id="themeIcon"></i>
                </button>
                <button class="btn-login">Log In</button>
                <button class="btn text-light">
                    <i class="fas fa-ellipsis-h"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <a href="#" class="sidebar-item">
            <i class="fas fa-home"></i>
            <span>Home</span>
        </a>
        <a href="#" class="sidebar-item">
            <i class="fas fa-fire"></i>
            <span>Popular</span>
        </a>
        <a href="#" class="sidebar-item">
            <i class="fas fa-question-circle"></i>
            <span>Answers</span>
            <span class="beta-badge">BETA</span>
        </a>
        <a href="#" class="sidebar-item">
            <i class="fas fa-compass"></i>
            <span>Explore</span>
        </a>

        <div class="sidebar-section">
            TOPICS
            <i class="fas fa-chevron-up"></i>
        </div>

        <a href="#" class="topic-item">
            <span>Internet Culture (Viral)</span>
            <i class="fas fa-chevron-down"></i>
        </a>
        <a href="#" class="topic-item">
            <span>Games</span>
            <i class="fas fa-chevron-down"></i>
        </a>
        <a href="#" class="topic-item">
            <span>Q&As</span>
            <i class="fas fa-chevron-down"></i>
        </a>
        <a href="#" class="topic-item">
            <span>Technology</span>
            <i class="fas fa-chevron-down"></i>
        </a>
        <a href="#" class="topic-item">
            <span>Pop Culture</span>
            <i class="fas fa-chevron-down"></i>
        </a>
        <a href="#" class="topic-item">
            <span>Movies & TV</span>
            <i class="fas fa-chevron-down"></i>
        </a>
        <a href="#" class="sidebar-item">
            <span>See more</span>
        </a>

        <div class="sidebar-section">
            RESOURCES
            <i class="fas fa-chevron-up"></i>
        </div>

        <a href="#" class="sidebar-item">
            <i class="fas fa-info-circle"></i>
            <span>About Reddit</span>
        </a>
        <a href="#" class="sidebar-item">
            <i class="fas fa-ad"></i>
            <span>Advertise</span>
        </a>
        <a href="#" class="sidebar-item">
            <i class="fas fa-headset"></i>
            <span>Reddit Pro</span>
        </a>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="container"> 

            <div class="row mb-6">
                <div class="col-lg-10 col-12 mx-auto">
 
                    <div class="row">
                        <div class="col-lg-8 col-12 mx-auto">
 

                            <!-- Post -->
                            <div class="post-card mt-4">
                                <div class="post-header">
                                    <div class="post-avatar"></div>
                                    <a href="#" class="post-subreddit">r/AmIOverreacting</a>
                                    <span class="post-time">• 16 hr. ago</span>
                                </div>
                                <div class="post-title">
                                    What's your favorite programming language and why?
                                </div>
                                <div class="post-title">
                                    <p>I've been coding for 5 years now and I'm curious to hear what languages people
                                        love and why. For me, it's Python - the simplicity and readability are
                                        unmatched!</p>
                                    <p>The ecosystem is incredible, from data science libraries like pandas and numpy to
                                        web frameworks like Django and Flask. Plus, the community is super welcoming to
                                        beginners.</p>
                                    <p>What about you? What's your go-to language and what makes it special for you?</p>
                                </div>


                                <div class="post-actions">
                                    <button class="post-action-btn">
                                        <i class="fas fa-arrow-up"></i>
                                        <span>12.5k</span>
                                    </button>
                                    <button class="post-action-btn">
                                        <i class="fas fa-comment"></i>
                                        <span>2.1k</span>
                                    </button>
                                    <button class="post-action-btn">
                                        <i class="fas fa-share"></i>
                                        <span>Share</span>
                                    </button>
                                    <button class="post-action-btn">
                                        <i class="fas fa-bookmark"></i>
                                    </button>
                                    <button class="post-action-btn">
                                        <i class="fas fa-ellipsis-h"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- Post -->
                            <div class="post-card">
                                <div class="post-header">
                                    <div class="post-avatar"></div>
                                    <a href="#" class="post-subreddit">r/AmIOverreacting</a>
                                    <span class="post-time">• 16 hr. ago</span>
                                </div>
                                <div class="post-title">
                                    What's your favorite programming language and why?
                                </div>

                                <div class="post-actions">
                                    <button class="post-action-btn">
                                        <i class="fas fa-arrow-up"></i>
                                        <span>12.5k</span>
                                    </button>
                                    <button class="post-action-btn">
                                        <i class="fas fa-comment"></i>
                                        <span>2.1k</span>
                                    </button>
                                    <button class="post-action-btn">
                                        <i class="fas fa-share"></i>
                                        <span>Share</span>
                                    </button>
                                    <button class="post-action-btn">
                                        <i class="fas fa-bookmark"></i>
                                    </button>
                                    <button class="post-action-btn">
                                        <i class="fas fa-ellipsis-h"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- Post -->
                            <div class="post-card">
                                <div class="post-header">
                                    <div class="post-avatar"></div>
                                    <a href="#" class="post-subreddit">r/AmIOverreacting</a>
                                    <span class="post-time">• 16 hr. ago</span>
                                </div>
                                <div class="post-title">
                                    Michael Jordan on if he still loves basketball: "I wish I could take a magic pill,
                                    put on shorts and go out and play the game of basketball today, because that's who I
                                    am. That type of competition, that type of competitiveness, is what I live for. And
                                    I miss it."
                                </div>

                                <div class="post-actions">
                                    <button class="post-action-btn">
                                        <i class="fas fa-arrow-up"></i>
                                        <span>12.5k</span>
                                    </button>
                                    <button class="post-action-btn">
                                        <i class="fas fa-comment"></i>
                                        <span>2.1k</span>
                                    </button>
                                    <button class="post-action-btn">
                                        <i class="fas fa-share"></i>
                                        <span>Share</span>
                                    </button>
                                    <button class="post-action-btn">
                                        <i class="fas fa-bookmark"></i>
                                    </button>
                                    <button class="post-action-btn">
                                        <i class="fas fa-ellipsis-h"></i>
                                    </button>
                                </div>
                            </div>
 

                           

                        </div>

                        <!-- Right Sidebar -->
                        <div class="col-lg-4 d-none d-lg-block">
                            <div class="right-sidebar">
                                <div class="popular-communities mt-n1">
                                    <div class="section-title">Popular Communities</div>

                                    <div class="community-item">
                                        <div class="community-info">
                                            <div class="community-avatar">
                                                <i class="fas fa-users"></i>
                                            </div>
                                            <div>
                                                <div class="community-name">r/AskMen</div>
                                                <div class="community-members">7,067,119 members</div>
                                            </div>
                                        </div>
                                        <button class="btn-login">Join</button>
                                    </div>

                                    <div class="community-item">
                                        <div class="community-info">
                                            <div class="community-avatar" style="background-color: #ff69b4;">
                                                <i class="fas fa-venus"></i>
                                            </div>
                                            <div>
                                                <div class="community-name">r/AskWomen</div>
                                                <div class="community-members">5,570,304 members</div>
                                            </div>
                                        </div>
                                        <button class="btn-login">Join</button>
                                    </div>

                                    <div class="community-item">
                                        <div class="community-info">
                                            <div class="community-avatar" style="background-color: #0070cc;">
                                                <i class="fab fa-playstation"></i>
                                            </div>
                                            <div>
                                                <div class="community-name">r/PS4</div>
                                                <div class="community-members">5,507,331 members</div>
                                            </div>
                                        </div>
                                        <button class="btn-login">Join</button>
                                    </div>

                                    <div class="community-item">
                                        <div class="community-info">
                                            <div class="community-avatar" style="background-color: #555;">
                                                <i class="fab fa-apple"></i>
                                            </div>
                                            <div>
                                                <div class="community-name">r/apple</div>
                                                <div class="community-members">6,273,102 members</div>
                                            </div>
                                        </div>
                                        <button class="btn-login">Join</button>
                                    </div>

                                    <div class="community-item">
                                        <div class="community-info">
                                            <div class="community-avatar" style="background-color: #f90;">
                                                <i class="fas fa-basketball-ball"></i>
                                            </div>
                                            <div>
                                                <div class="community-name">r/NBA2k</div>
                                                <div class="community-members">733,610 members</div>
                                            </div>
                                        </div>
                                        <button class="btn-login">Join</button>
                                    </div>

                                    <button class="btn text-primary border-0 mt-2">See more</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- Navbar mobile START -->
    <div class="navbar navbar-mobile">
        <ul class="navbar-nav">
            <!-- Nav item Home -->
            <li class="nav-item">
                <a class="nav-link" href="index.html"><i class="fas fa-home fa-fw fs-4"></i>
                    <span class="mb-0 nav-text">Home</span>
                </a>
            </li>

            <!-- Nav item My Trips -->
            <li class="nav-item">
                <a class="nav-link" href="account-bookings.html"><i class="fas fa-compass fa-fw fs-4"></i>
                    <span class="mb-0 nav-text">Explore</span>
                </a>
            </li>

            <!-- Nav item Offer -->
            <li class="nav-item">
                <a class="nav-link" href="offer-detail.html"><i class="fas fa-fire fa-fw fs-4"></i>
                    <span class="mb-0 nav-text">Hot</span>
                </a>
            </li>

            <!-- Nav item Account -->
            <li class="nav-item">
                <a class="nav-link" href="account-profile.html"><i class="fas fa-user fa-fw fs-4"></i>
                    <span class="mb-0 nav-text">Account</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- Navbar mobile END -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script>
    // Load saved theme on page load
    document.addEventListener("DOMContentLoaded", function() {
        const savedTheme = localStorage.getItem("theme") || "light";
        document.body.setAttribute("data-theme", savedTheme);
        updateThemeIcon(savedTheme);
    });

    function toggleTheme() {
        const currentTheme = document.body.getAttribute("data-theme");
        const newTheme = currentTheme === "dark" ? "light" : "dark";
        document.body.setAttribute("data-theme", newTheme);
        localStorage.setItem("theme", newTheme);
        updateThemeIcon(newTheme);
    }

    function updateThemeIcon(theme) {
        const icon = document.getElementById("themeIcon");
        if (theme === "dark") {
            icon.classList.remove("fa-sun");
            icon.classList.add("fa-moon");
        } else {
            icon.classList.remove("fa-moon");
            icon.classList.add("fa-sun");
        }
    }


    // function toggleTheme() {
    //     const html = document.documentElement;
    //     const currentTheme = html.getAttribute('data-theme');
    //     const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
    //     html.setAttribute('data-theme', newTheme);

    //     const icon = document.getElementById('themeIcon');
    //     icon.className = newTheme === 'dark' ? 'fas fa-moon' : 'fas fa-sun';
    // }

    function toggleSidebar() {
        document.getElementById('sidebar').classList.toggle('show');
    }

    // Close sidebar when clicking outside on mobile
    document.addEventListener('click', function(event) {
        const sidebar = document.getElementById('sidebar');
        const hamburger = document.querySelector('.hamburger');

        if (window.innerWidth <= 768) {
            if (!sidebar.contains(event.target) && !hamburger.contains(event.target)) {
                sidebar.classList.remove('show');
            }
        }
    });

    // Set default theme to dark
    document.documentElement.setAttribute('data-theme', 'light');
    </script>
</body>

</html>