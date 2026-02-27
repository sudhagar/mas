<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAS Mahal | Premium Wedding & Event Venue</title>
    <meta name="description"
        content="MAS Mahal - A premium air-conditioned wedding and event venue in Manavala Nagar, Tiruvallur. Perfect for weddings, receptions, and corporate events.">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Playfair+Display:wght@400;600;700&display=swap"
        rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        /* Mobile Menu Basic Implementation */
        .mobile-menu-btn {
            display: none;
            color: var(--secondary-color);
            font-size: 1.5rem;
            cursor: pointer;
        }

        @media(max-width: 768px) {
            .mobile-menu-btn {
                display: block;
            }
        }
    </style>
</head>

<body>

    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container top-bar-content">
            <div>
                <span><i style="color:var(--secondary-color)">&#9990;</i> +91 99658 57746</span>
                <span style="margin-left: 20px"><i style="color:var(--secondary-color)">&#9993;</i> Housing Board,
                    Tirupathur</span>
            </div>
            <div>
                <!-- Social Icons or Opening Hours could go here -->
                <span>Every Event, A Precious Memory.</span>
            </div>
        </div>
    </div>

    <header>
        <div class="container">
            <nav>
                <ul class="nav-links nav-left">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                </ul>

                <div class="logo">
                    <a href="index.php"><img src="./assets/images/logo.png" alt="MAS Mahal logo"></a>
                </div>

                <ul class="nav-links nav-right">
                    <li><a href="services.php">Services</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="contact.php" class="btn" style="padding: 10px 25px; font-size: 0.8rem;">Book Now</a>
                    </li>
                </ul>

                <div class="mobile-menu-btn"
                    onclick="const menu = document.querySelector('.nav-links-mobile'); menu.style.display = menu.style.display === 'flex' ? 'none' : 'flex';">
                    &#9776;
                </div>

                <ul class="nav-links-mobile">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="contact.php" class="btn" style="padding: 10px 25px; font-size: 0.8rem;">Book Now</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
