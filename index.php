<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum - Reddit Style</title>
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
            --bg-primary: #ffffff;
            --bg-secondary: #f8f9fa;
            --bg-hover: #f6f7f8;
            --text-primary: #1c1c1c;
            --text-secondary: #7c7c7c;
            --border-color: #ccc;
            --card-bg: #ffffff;
            --upvote-color: #ff4500;
        }

        [data-theme="dark"] {
            --bg-primary: #030303;
            --bg-secondary: #1a1a1b;
            --bg-hover: #272729;
            --text-primary: #d7dadc;
            --text-secondary: #818384;
            --border-color: #343536;
            --card-bg: #1a1a1b;
            --upvote-color: #ff4500;
        }

        body {
            background-color: var(--bg-secondary);
            color: var(--text-primary);
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            transition: background-color 0.3s, color 0.3s;
        }

        .navbar {
            background-color: var(--card-bg) !important;
            border-bottom: 1px solid var(--border-color);
            padding: 0.5rem 0;
        }

        .navbar-brand {
            font-weight: bold;
            color: var(--upvote-color) !important;
            font-size: 1.5rem;
        }

        .nav-link {
            color: var(--text-primary) !important;
        }

        .post-card {
            background-color: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: 4px;
            margin-bottom: 10px;
            transition: all 0.2s;
            cursor: pointer;
        }

        .post-card:hover {
            border-color: var(--text-secondary);
        }

        .vote-section {
            background-color: var(--bg-secondary);
            padding: 8px;
            border-radius: 4px 0 0 4px;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-width: 40px;
        }

        .vote-btn {
            background: none;
            border: none;
            color: var(--text-secondary);
            cursor: pointer;
            padding: 2px;
        }

        .vote-btn:hover {
            color: var(--upvote-color);
        }

        .vote-count {
            font-weight: bold;
            font-size: 0.75rem;
            margin: 4px 0;
        }

        .post-content {
            padding: 8px 12px;
            flex: 1;
        }

        .post-title {
            color: var(--text-primary);
            font-size: 1rem;
            font-weight: 500;
            margin-bottom: 4px;
            text-decoration: none;
        }

        .post-title:hover {
            color: var(--upvote-color);
        }

        .post-meta {
            font-size: 0.75rem;
            color: var(--text-secondary);
        }

        .post-meta a {
            color: var(--text-secondary);
            text-decoration: none;
        }

        .post-meta a:hover {
            text-decoration: underline;
        }

        .category-badge {
            background-color: var(--bg-hover);
            color: var(--text-primary);
            padding: 2px 8px;
            border-radius: 12px;
            font-size: 0.7rem;
            display: inline-block;
            margin-bottom: 4px;
        }

        .sidebar-widget {
            background-color: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: 4px;
            padding: 12px;
            margin-bottom: 16px;
             
        }

        .theme-toggle {
            background: none;
            border: none;
            color: var(--text-primary);
            cursor: pointer;
            font-size: 1.2rem;
        }

        .btn-primary {
            background-color: var(--upvote-color);
            border-color: var(--upvote-color);
        }

        .btn-primary:hover {
            background-color: #ff5722;
            border-color: #ff5722;
        }

        .avatar {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 0.75rem;
        }

        .profile-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 40px 0 80px;
            color: white;
            position: relative;
        }

        .profile-avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            font-weight: bold;
            color: #667eea;
            border: 4px solid white;
            margin-top: -40px;
        }

        .profile-card {
            background-color: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: 4px;
            padding: 20px;
            margin-top: -60px;
            position: relative;
            z-index: 1;
        }

        .stat-item {
            text-align: center;
        }

        .stat-value {
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--text-primary);
        }

        .stat-label {
            font-size: 0.75rem;
            color: var(--text-secondary);
        }

        .comment-section {
            background-color: var(--bg-secondary);
            padding: 12px;
            border-radius: 4px;
            margin-top: 8px;
        }

        .comment {
            border-left: 2px solid var(--border-color);
            padding-left: 12px;
            margin-bottom: 12px;
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

        .comment-box {
            background-color: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: 4px;
            padding: 16px;
            margin-bottom: 16px;
        }

        .comment-input {
            width: 100%;
            min-height: 100px;
            padding: 12px;
            border: 1px solid var(--border-color);
            border-radius: 4px;
            background-color: var(--bg-secondary);
            color: var(--text-primary);
            font-family: inherit;
            resize: vertical;
        }

        .comment-input:focus {
            outline: none;
            border-color: var(--upvote-color);
        }

        .comment-item {
            background-color: var(--bg-secondary);
            border-radius: 4px;
            padding: 12px;
            margin-bottom: 12px;
        }

        .comment-header {
            font-size: 0.875rem;
            margin-bottom: 8px;
        }

        .comment-body {
            font-size: 0.9rem;
            margin-bottom: 8px;
            color: var(--text-primary);
        }

        .comment-actions {
            font-size: 0.75rem;
        }

        .comment-actions button {
            background: none;
            border: none;
            color: var(--text-secondary);
            cursor: pointer;
            padding: 4px 8px;
            margin-right: 8px;
        }

        .comment-actions button:hover {
            color: var(--text-primary);
        }

        .nested-comment {
            margin-left: 32px;
            margin-top: 12px;
            padding-left: 12px;
            border-left: 2px solid var(--border-color);
        }

        @media (max-width: 768px) {
            .sidebar-widget {
                margin-top: 16px;
            }
            .nested-comment {
                margin-left: 16px;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#" onclick="showHome()">
                <i class="fab fa-reddit"></i> Forum
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showHome()"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-fire"></i> Popular</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center">
                    <button class="theme-toggle me-3" onclick="toggleTheme()">
                        <i class="fas fa-moon" id="themeIcon"></i>
                    </button>
                    <button class="btn btn-sm btn-primary me-2">
                        <i class="fas fa-plus"></i> Create Post
                    </button>
                    <div class="avatar" onclick="showProfile()" style="cursor: pointer;">TE</div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-4" id="mainContent">
        <div class="row">
            <!-- Posts Section -->
            <div class="col-lg-8">
                <!-- Post 1 -->
                <div class="post-card d-flex" onclick="showThread(1)">
                    <div class="vote-section">
                        <button class="vote-btn" onclick="event.stopPropagation()"><i class="fas fa-arrow-up"></i></button>
                        <span class="vote-count">127</span>
                        <button class="vote-btn" onclick="event.stopPropagation()"><i class="fas fa-arrow-down"></i></button>
                    </div>
                    <div class="post-content">
                        <span class="category-badge">Discussion</span>
                        <div>
                            <a href="#" class="post-title d-block" onclick="event.preventDefault()">What's your favorite programming language and why?</a>
                        </div>
                        <div class="post-meta">
                            Posted by <a href="#" onclick="event.stopPropagation(); showProfile()">u/techEnthusiast</a> • 2 hours ago • 
                            <a href="#" onclick="event.stopPropagation()"><i class="fas fa-comment"></i> 45 comments</a>
                        </div>
                    </div>
                </div>

                <!-- Post 2 -->
                <div class="post-card d-flex">
                    <div class="vote-section">
                        <button class="vote-btn"><i class="fas fa-arrow-up"></i></button>
                        <span class="vote-count">289</span>
                        <button class="vote-btn"><i class="fas fa-arrow-down"></i></button>
                    </div>
                    <div class="post-content">
                        <span class="category-badge">Show & Tell</span>
                        <div>
                            <a href="#" class="post-title d-block">Just launched my first SaaS product! 🚀</a>
                        </div>
                        <div class="post-meta">
                            Posted by <a href="#">u/IndieHacker</a> • 5 hours ago • 
                            <a href="#"><i class="fas fa-comment"></i> 67 comments</a>
                        </div>
                    </div>
                </div>

                <!-- Post 3 -->
                <div class="post-card d-flex">
                    <div class="vote-section">
                        <button class="vote-btn"><i class="fas fa-arrow-up"></i></button>
                        <span class="vote-count">94</span>
                        <button class="vote-btn"><i class="fas fa-arrow-down"></i></button>
                    </div>
                    <div class="post-content">
                        <span class="category-badge">Question</span>
                        <div>
                            <a href="#" class="post-title d-block">Tips for staying motivated during long projects?</a>
                        </div>
                        <div class="post-meta">
                            Posted by <a href="#">u/devJourney</a> • 1 day ago • 
                            <a href="#"><i class="fas fa-comment"></i> 31 comments</a>
                        </div>
                    </div>
                </div>

                <!-- Post 4 -->
                <div class="post-card d-flex">
                    <div class="vote-section">
                        <button class="vote-btn"><i class="fas fa-arrow-up"></i></button>
                        <span class="vote-count">156</span>
                        <button class="vote-btn"><i class="fas fa-arrow-down"></i></button>
                    </div>
                    <div class="post-content">
                        <span class="category-badge">Tutorial</span>
                        <div>
                            <a href="#" class="post-title d-block">Building a REST API with Node.js - Complete Guide</a>
                        </div>
                        <div class="post-meta">
                            Posted by <a href="#">u/codeTeacher</a> • 3 days ago • 
                            <a href="#"><i class="fas fa-comment"></i> 89 comments</a>
                        </div>
                    </div>
                </div>

                <!-- Post 5 -->
                <div class="post-card d-flex">
                    <div class="vote-section">
                        <button class="vote-btn"><i class="fas fa-arrow-up"></i></button>
                        <span class="vote-count">203</span>
                        <button class="vote-btn"><i class="fas fa-arrow-down"></i></button>
                    </div>
                    <div class="post-content">
                        <span class="category-badge">News</span>
                        <div>
                            <a href="#" class="post-title d-block">New framework released: Lightning-fast and developer-friendly</a>
                        </div>
                        <div class="post-meta">
                            Posted by <a href="#">u/newsBot</a> • 6 hours ago • 
                            <a href="#"><i class="fas fa-comment"></i> 112 comments</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- About Widget -->
                <div class="sidebar-widget">
                    <h6 class="mb-3"><i class="fas fa-info-circle"></i> About Community</h6>
                    <p style="font-size: 0.875rem; color: var(--text-secondary);">
                        Welcome to our developer community! Share your projects, ask questions, and connect with fellow developers.
                    </p>
                    <hr>
                    <div class="d-flex justify-content-between" style="font-size: 0.875rem;">
                        <div>
                            <div style="font-weight: bold;">125K</div>
                            <div style="color: var(--text-secondary);">Members</div>
                        </div>
                        <div>
                            <div style="font-weight: bold;">2.5K</div>
                            <div style="color: var(--text-secondary);">Online</div>
                        </div>
                    </div>
                </div>

                <!-- Popular Topics -->
                <div class="sidebar-widget">
                    <h6 class="mb-3"><i class="fas fa-fire"></i> Popular Topics</h6>
                    <div class="d-flex flex-wrap gap-2">
                        <span class="category-badge">#javascript</span>
                        <span class="category-badge">#python</span>
                        <span class="category-badge">#webdev</span>
                        <span class="category-badge">#react</span>
                        <span class="category-badge">#career</span>
                        <span class="category-badge">#tutorial</span>
                    </div>
                </div>

                <!-- Rules Widget -->
                <div class="sidebar-widget">
                    <h6 class="mb-3"><i class="fas fa-book"></i> Community Rules</h6>
                    <ol style="font-size: 0.875rem; color: var(--text-secondary); padding-left: 1.2rem;">
                        <li class="mb-2">Be respectful and kind</li>
                        <li class="mb-2">No spam or self-promotion</li>
                        <li class="mb-2">Stay on topic</li>
                        <li class="mb-2">Use appropriate tags</li>
                        <li>Follow code of conduct</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Profile Page (Hidden by default) -->
    <div id="profileContent" style="display: none;">
        <div class="profile-header">
            <div class="container">
                <h2>u/techEnthusiast</h2>
                <p class="mb-0"><i class="fas fa-cake-candles"></i> Joined January 2023</p>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="profile-card">
                        <div class="profile-avatar mb-3">TE</div>
                        <h4>techEnthusiast</h4>
                        <p class="text-secondary">
                            <i class="fas fa-map-marker-alt"></i> San Francisco, CA • 
                            <i class="fas fa-link"></i> <a href="#" style="color: var(--text-secondary);">techblog.dev</a>
                        </p>
                        <p style="color: var(--text-secondary);">
                            Full-stack developer passionate about clean code and user experience. Always learning, always building.
                        </p>
                        
                        <div class="row mt-4">
                            <div class="col-4 stat-item">
                                <div class="stat-value">127</div>
                                <div class="stat-label">Posts</div>
                            </div>
                            <div class="col-4 stat-item">
                                <div class="stat-value">8.5K</div>
                                <div class="stat-label">Karma</div>
                            </div>
                            <div class="col-4 stat-item">
                                <div class="stat-value">342</div>
                                <div class="stat-label">Comments</div>
                            </div>
                        </div>
                    </div>

                    <!-- User Posts -->
                    <h5 class="mt-4 mb-3">Recent Posts</h5>
                    <div class="post-card d-flex">
                        <div class="vote-section">
                            <button class="vote-btn"><i class="fas fa-arrow-up"></i></button>
                            <span class="vote-count">127</span>
                            <button class="vote-btn"><i class="fas fa-arrow-down"></i></button>
                        </div>
                        <div class="post-content">
                            <span class="category-badge">Discussion</span>
                            <div>
                                <a href="#" class="post-title d-block">What's your favorite programming language and why?</a>
                            </div>
                            <div class="post-meta">
                                2 hours ago • <a href="#"><i class="fas fa-comment"></i> 45 comments</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sidebar-widget mt-4 mt-lg-0">
                        <h6 class="mb-3"><i class="fas fa-trophy"></i> Achievements</h6>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-medal" style="font-size: 1.5rem; color: gold; margin-right: 12px;"></i>
                            <div>
                                <div style="font-weight: bold;">Top Contributor</div>
                                <div style="font-size: 0.75rem; color: var(--text-secondary);">100+ quality posts</div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-star" style="font-size: 1.5rem; color: silver; margin-right: 12px;"></i>
                            <div>
                                <div style="font-weight: bold;">Helpful Helper</div>
                                <div style="font-size: 0.75rem; color: var(--text-secondary);">50+ helpful answers</div>
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-outline-secondary w-100 mt-3" onclick="showHome()">
                        <i class="fas fa-arrow-left"></i> Back to Home
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Thread View Page (Hidden by default) -->
    <div id="threadContent" style="display: none;">
        <div class="container mt-4">
            <div class="row">
                <div class="col-lg-8">
                    <button class="btn btn-sm btn-outline-secondary mb-3" onclick="showHome()">
                        <i class="fas fa-arrow-left"></i> Back to Posts
                    </button>

                    <!-- Thread Post -->
                    <div class="thread-content">
                        <div class="d-flex align-items-start">
                            <div class="vote-section me-3">
                                <button class="vote-btn"><i class="fas fa-arrow-up"></i></button>
                                <span class="vote-count">127</span>
                                <button class="vote-btn"><i class="fas fa-arrow-down"></i></button>
                            </div>
                            <div class="flex-grow-1">
                                <span class="category-badge">Discussion</span>
                                <h4 class="mt-2">What's your favorite programming language and why?</h4>
                                <div class="post-meta mb-3">
                                    Posted by <a href="#" onclick="showProfile()">u/techEnthusiast</a> • 2 hours ago
                                </div>
                                <div class="thread-body">
                                    <p>I've been coding for 5 years now and I'm curious to hear what languages people love and why. For me, it's Python - the simplicity and readability are unmatched!</p>
                                    <p>The ecosystem is incredible, from data science libraries like pandas and numpy to web frameworks like Django and Flask. Plus, the community is super welcoming to beginners.</p>
                                    <p>What about you? What's your go-to language and what makes it special for you?</p>
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-sm btn-outline-secondary me-2">
                                        <i class="fas fa-share"></i> Share
                                    </button>
                                    <button class="btn btn-sm btn-outline-secondary me-2">
                                        <i class="fas fa-bookmark"></i> Save
                                    </button>
                                    <button class="btn btn-sm btn-outline-secondary">
                                        <i class="fas fa-flag"></i> Report
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Comment Box -->
                    <div class="comment-box">
                        <h6 class="mb-3">Add a Comment</h6>
                        <textarea class="comment-input" id="newComment" placeholder="What are your thoughts?"></textarea>
                        <div class="mt-3 d-flex justify-content-end">
                            <button class="btn btn-sm btn-outline-secondary me-2">Cancel</button>
                            <button class="btn btn-sm btn-primary" onclick="addComment()">
                                <i class="fas fa-paper-plane"></i> Comment
                            </button>
                        </div>
                    </div>

                    <!-- Comments Section -->
                    <div>
                        <h6 class="mb-3">45 Comments</h6>

                        <!-- Comment 1 -->
                        <div class="comment-item">
                            <div class="comment-header d-flex align-items-center">
                                <div class="avatar me-2" style="width: 24px; height: 24px; font-size: 0.65rem;">CN</div>
                                <strong>codeNinja</strong>
                                <span class="text-secondary ms-2">• 1 hour ago</span>
                            </div>
                            <div class="comment-body">
                                JavaScript for sure! The ecosystem is incredible and you can build literally anything - frontend, backend, mobile apps, desktop apps. The async/await syntax makes handling asynchronous operations so elegant.
                            </div>
                            <div class="comment-actions">
                                <button onclick="voteComment(this, 1)">
                                    <i class="fas fa-arrow-up"></i> <span>23</span>
                                </button>
                                <button onclick="voteComment(this, -1)">
                                    <i class="fas fa-arrow-down"></i>
                                </button>
                                <button onclick="toggleReply(this)">
                                    <i class="fas fa-reply"></i> Reply
                                </button>
                                <button>
                                    <i class="fas fa-share"></i> Share
                                </button>
                            </div>

                            <!-- Nested Reply -->
                            <div class="nested-comment">
                                <div class="comment-item">
                                    <div class="comment-header d-flex align-items-center">
                                        <div class="avatar me-2" style="width: 24px; height: 24px; font-size: 0.65rem;">TE</div>
                                        <strong>techEnthusiast</strong>
                                        <span class="text-secondary ms-2">• 45 min ago</span>
                                    </div>
                                    <div class="comment-body">
                                        That's a great point! JS has come a long way. Have you tried TypeScript? It adds type safety which makes large projects much more maintainable.
                                    </div>
                                    <div class="comment-actions">
                                        <button onclick="voteComment(this, 1)">
                                            <i class="fas fa-arrow-up"></i> <span>12</span>
                                        </button>
                                        <button onclick="voteComment(this, -1)">
                                            <i class="fas fa-arrow-down"></i>
                                        </button>
                                        <button onclick="toggleReply(this)">
                                            <i class="fas fa-reply"></i> Reply
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Comment 2 -->
                        <div class="comment-item">
                            <div class="comment-header d-flex align-items-center">
                                <div class="avatar me-2" style="width: 24px; height: 24px; font-size: 0.65rem;">RC</div>
                                <strong>rustacean</strong>
                                <span class="text-secondary ms-2">• 2 hours ago</span>
                            </div>
                            <div class="comment-body">
                                Rust! Memory safety without garbage collection is a game changer. The borrow checker seems tough at first, but once you understand it, you write safer code naturally. Plus the error messages are incredibly helpful.
                            </div>
                            <div class="comment-actions">
                                <button onclick="voteComment(this, 1)">
                                    <i class="fas fa-arrow-up"></i> <span>19</span>
                                </button>
                                <button onclick="voteComment(this, -1)">
                                    <i class="fas fa-arrow-down"></i>
                                </button>
                                <button onclick="toggleReply(this)">
                                    <i class="fas fa-reply"></i> Reply
                                </button>
                                <button>
                                    <i class="fas fa-share"></i> Share
                                </button>
                            </div>
                        </div>

                        <!-- Comment 3 -->
                        <div class="comment-item">
                            <div class="comment-header d-flex align-items-center">
                                <div class="avatar me-2" style="width: 24px; height: 24px; font-size: 0.65rem;">GP</div>
                                <strong>goProgrammer</strong>
                                <span class="text-secondary ms-2">• 3 hours ago</span>
                            </div>
                            <div class="comment-body">
                                Go (Golang) is my favorite! Simple syntax, great for concurrent programming with goroutines, and compiles to a single binary. Perfect for microservices and cloud-native applications.
                            </div>
                            <div class="comment-actions">
                                <button onclick="voteComment(this, 1)">
                                    <i class="fas fa-arrow-up"></i> <span>15</span>
                                </button>
                                <button onclick="voteComment(this, -1)">
                                    <i class="fas fa-arrow-down"></i>
                                </button>
                                <button onclick="toggleReply(this)">
                                    <i class="fas fa-reply"></i> Reply
                                </button>
                                <button>
                                    <i class="fas fa-share"></i> Share
                                </button>
                            </div>

                            <!-- Nested Replies -->
                            <div class="nested-comment">
                                <div class="comment-item">
                                    <div class="comment-header d-flex align-items-center">
                                        <div class="avatar me-2" style="width: 24px; height: 24px; font-size: 0.65rem;">KD</div>
                                        <strong>kotlinDev</strong>
                                        <span class="text-secondary ms-2">• 2 hours ago</span>
                                    </div>
                                    <div class="comment-body">
                                        Go is great! But have you tried Kotlin for backend? It has similar simplicity but with better null safety and more expressive syntax.
                                    </div>
                                    <div class="comment-actions">
                                        <button onclick="voteComment(this, 1)">
                                            <i class="fas fa-arrow-up"></i> <span>8</span>
                                        </button>
                                        <button onclick="voteComment(this, -1)">
                                            <i class="fas fa-arrow-down"></i>
                                        </button>
                                        <button onclick="toggleReply(this)">
                                            <i class="fas fa-reply"></i> Reply
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="sidebar-widget">
                        <h6 class="mb-3"><i class="fas fa-info-circle"></i> About Community</h6>
                        <p style="font-size: 0.875rem; color: var(--text-secondary);">
                            Welcome to our developer community! Share your projects, ask questions, and connect with fellow developers.
                        </p>
                        <hr>
                        <div class="d-flex justify-content-between" style="font-size: 0.875rem;">
                            <div>
                                <div style="font-weight: bold;">125K</div>
                                <div style="color: var(--text-secondary);">Members</div>
                            </div>
                            <div>
                                <div style="font-weight: bold;">2.5K</div>
                                <div style="color: var(--text-secondary);">Online</div>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-widget">
                        <h6 class="mb-3"><i class="fas fa-book"></i> Community Rules</h6>
                        <ol style="font-size: 0.875rem; color: var(--text-secondary); padding-left: 1.2rem;">
                            <li class="mb-2">Be respectful and kind</li>
                            <li class="mb-2">No spam or self-promotion</li>
                            <li class="mb-2">Stay on topic</li>
                            <li class="mb-2">Use appropriate tags</li>
                            <li>Follow code of conduct</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script>
        function toggleTheme() {
            const html = document.documentElement;
            const currentTheme = html.getAttribute('data-theme');
            const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
            html.setAttribute('data-theme', newTheme);
            
            const icon = document.getElementById('themeIcon');
            icon.className = newTheme === 'dark' ? 'fas fa-moon' : 'fas fa-sun';
        }

        function showProfile() {
            document.getElementById('mainContent').style.display = 'none';
            document.getElementById('profileContent').style.display = 'block';
            document.getElementById('threadContent').style.display = 'none';
            window.scrollTo(0, 0);
        }

        function showHome() {
            document.getElementById('mainContent').style.display = 'block';
            document.getElementById('profileContent').style.display = 'none';
            document.getElementById('threadContent').style.display = 'none';
            window.scrollTo(0, 0);
        }

        function showThread(postId) {
            document.getElementById('mainContent').style.display = 'none';
            document.getElementById('profileContent').style.display = 'none';
            document.getElementById('threadContent').style.display = 'block';
            window.scrollTo(0, 0);
        }

        function voteComment(button, direction) {
            const voteSpan = button.querySelector('span');
            if (voteSpan) {
                const currentVotes = parseInt(voteSpan.textContent);
                voteSpan.textContent = currentVotes + direction;
            }
        }

        function toggleReply(button) {
            const commentItem = button.closest('.comment-item');
            
            // Check if reply box already exists
            let replyBox = commentItem.querySelector('.reply-box');
            if (replyBox) {
                replyBox.remove();
                return;
            }

            // Create reply box
            replyBox = document.createElement('div');
            replyBox.className = 'reply-box mt-3';
            replyBox.innerHTML = `
                <textarea class="comment-input" style="min-height: 80px;" placeholder="Write your reply..."></textarea>
                <div class="mt-2 d-flex justify-content-end">
                    <button class="btn btn-sm btn-outline-secondary me-2" onclick="this.closest('.reply-box').remove()">Cancel</button>
                    <button class="btn btn-sm btn-primary" onclick="submitReply(this)">
                        <i class="fas fa-paper-plane"></i> Reply
                    </button>
                </div>
            `;
            
            const actions = commentItem.querySelector('.comment-actions');
            actions.after(replyBox);
        }

        function submitReply(button) {
            const replyBox = button.closest('.reply-box');
            const textarea = replyBox.querySelector('textarea');
            const replyText = textarea.value.trim();
            
            if (!replyText) {
                alert('Please write a reply first!');
                return;
            }

            // Find or create nested comment section
            const commentItem = replyBox.closest('.comment-item');
            let nestedSection = commentItem.querySelector('.nested-comment');
            
            if (!nestedSection) {
                nestedSection = document.createElement('div');
                nestedSection.className = 'nested-comment';
                commentItem.appendChild(nestedSection);
            }

            // Create new comment
            const newComment = document.createElement('div');
            newComment.className = 'comment-item';
            newComment.innerHTML = `
                <div class="comment-header d-flex align-items-center">
                    <div class="avatar me-2" style="width: 24px; height: 24px; font-size: 0.65rem;">TE</div>
                    <strong>techEnthusiast</strong>
                    <span class="text-secondary ms-2">• Just now</span>
                </div>
                <div class="comment-body">${replyText}</div>
                <div class="comment-actions">
                    <button onclick="voteComment(this, 1)">
                        <i class="fas fa-arrow-up"></i> <span>1</span>
                    </button>
                    <button onclick="voteComment(this, -1)">
                        <i class="fas fa-arrow-down"></i>
                    </button>
                    <button onclick="toggleReply(this)">
                        <i class="fas fa-reply"></i> Reply
                    </button>
                </div>
            `;

            nestedSection.appendChild(newComment);
            replyBox.remove();
        }

        function addComment() {
            const textarea = document.getElementById('newComment');
            const commentText = textarea.value.trim();
            
            if (!commentText) {
                alert('Please write a comment first!');
                return;
            }

            // Create new comment element
            const commentsSection = document.querySelector('#threadContent > .container .col-lg-8 > div:last-child');
            const newComment = document.createElement('div');
            newComment.className = 'comment-item';
            newComment.innerHTML = `
                <div class="comment-header d-flex align-items-center">
                    <div class="avatar me-2" style="width: 24px; height: 24px; font-size: 0.65rem;">TE</div>
                    <strong>techEnthusiast</strong>
                    <span class="text-secondary ms-2">• Just now</span>
                </div>
                <div class="comment-body">${commentText}</div>
                <div class="comment-actions">
                    <button onclick="voteComment(this, 1)">
                        <i class="fas fa-arrow-up"></i> <span>1</span>
                    </button>
                    <button onclick="voteComment(this, -1)">
                        <i class="fas fa-arrow-down"></i>
                    </button>
                    <button onclick="toggleReply(this)">
                        <i class="fas fa-reply"></i> Reply
                    </button>
                    <button>
                        <i class="fas fa-share"></i> Share
                    </button>
                </div>
            `;

            commentsSection.appendChild(newComment);
            textarea.value = '';
            
            // Update comment count
            const commentCount = document.querySelector('#threadContent h6');
            const currentCount = parseInt(commentCount.textContent);
            commentCount.textContent = `${currentCount + 1} Comments`;
        }

        // Set default theme to dark
        document.documentElement.setAttribute('data-theme', 'dark');
    </script>
</body>
</html>