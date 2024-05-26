<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $counter = $_POST['counter'];
    $category = $_POST['idType'];
    $username = "John"; // For example, replace with actual username logic
    $content = $_POST['content'];

    // Display the submitted data in the post area
    echo '<div class="post">';
    echo '<div class="specified-concern">';
    echo '<strong><em><p>' . $category . '</p></em></strong>';
    echo '<p>•</p>';
    echo '<em><p class="date">' . date("Y-m-d H:i:s") . '</p></em>'; // Display the current date and time
    echo '</div>';
    echo '<div class="user-info">';
    echo '<div class="user-icon">';
    echo '<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="none" viewBox="0 0 67 64">';
    echo '<path fill="url(#a)" d="M0 0h67v64H0z"/>';
    echo '<defs>';
    echo '<pattern id="a" width="1" height="1" patternContentUnits="objectBoundingBox">';
    echo '<use href="#b" transform="matrix(.00955 0 0 .01 .022 0)"/>';
    echo '</pattern>';
    echo '</svg>';
    echo '</div>';
    echo '<p class="username">' . $username . '</p>';
    echo '</div>';
    echo '<p class="content">' . $content . '</p>';
    echo '</div>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DavHow: Discussion Forum</title>
    <link rel="stylesheet" href="/New DavHow/valid_id/styles_validid.css">
    <link rel="stylesheet" href="/New DavHow/documents/header.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Poppins:ital,wght@0,300;0,400;0,600;0,700;1,400&family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <!-- HEADER -->
    <header class="header1">
        <div class="top-bar">
            <div class="socmeds">
                <a href="#"><i class="ri-facebook-circle-fill"></i></a>
                <a href="https://x.com/ART_Solutions23" rel="noopener noreferrer" target="_blank"><i class="ri-twitter-x-line"></i></a>
                <a href="#"><i class="ri-mail-fill"></i></a>
            </div>
            <div class="logo">
                <img src="/New DavHow/photos/logo.png" alt="DavHow: Unsaon ni Bai?">
                <p class="Brand">DavHow</p>
                <p class="Tagline">UNSAON NI BAI?</p>
            </div>
            <div class="time">
                <div class="display-date">
                    <span id="day">day<br></span>
                    <span id="month">month</span>
                    <span id="daynum">00</span>
                    <span id="year">0000</span>
                </div>
                <div class="display-time"></div>
        </div>
        </div>
    </header>
    <header class="header" id="header">
        <nav class="nav container">
            <p class="nav_tag"><em>Official website of ART Solutions</em></p>
            <div class="nav_menu" id="nav-menu">
                <ul class="nav_list">
                    <li class="nav_item">
                        <a href="#" class="nav_link">HOME</a>
                    </li>
        
                    <li class="nav_item">
                        <a href="#" class="nav_link">CATALOG</a>
                    </li>
        
                    <li class="nav_item">
                        <a href="#" class="nav_link">ABOUT US</a>
                    </li>
        
                    <li class="nav_item">
                        <a href="#" class="nav_link">DASHBOARD</a>
                    </li>
                </ul>
    
                <!-- Close button -->
                <div class="nav_close" id="nav-close">
                    <i class="ri-close-circle-line"></i>
                </div>
            </div>
    
            <div class="nav_actions">
                <!-- Search button -->
                <i class="ri-search-line nav_search" id="search-btn"></i>
    
                <!-- Login button -->
                <i class="ri-user-line nav_login" id="login-btn"></i>
    
                <!-- Toggle button -->
                <div class="nav_toggle" id="nav-toggle">
                    <i class="ri-menu-line"></i>
                </div>
            </div>
        </nav>
    </header>
    
      <!--==================== SEARCH ====================-->
    <div class="search" id="search">
        <form action="" class="search__form">
            <i class="ri-search-line search__icon"></i>
            <input type="search" placeholder="(e.g. NSO Birth Certificate)" class="search__input">
        </form>

        <i class="ri-close-circle-line search__close" id="search-close"></i>
    </div>
    
    <!--==================== LOGIN ====================-->
    <div class="login" id="login">
        <form action="" class="login__form">
        <h2 class="login__title">Log In</h2>
        
        <div class="login__group">
            <div>
                <label for="email" class="login__label">Email:</label>
                <input type="email" placeholder="Write your email" id="email" class="login__input">
            </div>
            
            <div>
                <label for="password" class="login__label">Password:</label>
                <input type="password" placeholder="Enter your password" id="password" class="login__input">
            </div>
        </div>
        
        <div>
            <p class="login__signup">Don't have an account? <a href="#">Sign up</a></p>
        
            <button type="submit" class="login__button">Log In</button>
        
            <a href="#" class="login__forgot">Forgot password?</a>
        </div>
        </form>
    
        <i class="ri-close-circle-line login__close" id="login-close"></i>
    </div>
    <!-- DISCUSSION FORUM -->
    <div class="whole-document-area">
        <div class="discussion">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <input type="hidden" name="counter" value="your_counter_value_here">
                <div class="create-post">
                    <div class="user-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="none" viewBox="0 0 67 64">
                            <path fill="url(#a)" d="M0 0h67v64H0z"/>
                            <defs>
                            <pattern id="a" width="1" height="1" patternContentUnits="objectBoundingBox">
                                <use href="#b" transform="matrix(.00955 0 0 .01 .022 0)"/>
                            </pattern>
                            <image id="b" width="100" height="100" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAAAXNSR0IArs4c6QAAERdJREFUeF7tXQuUJFV5/v/q3pmFVTCyri/kOexOV1U3uxlyVDaRFfEQElSM2RMTEeWhJgFUNCQx0cQIiic+iCRy9AgoAUIMRsMm0WBWRcVd0bMCPVW3Z9ZVMSoIrkjIwuzMdNWf/nure/pRj3tv3eoeTlLn7Nk92//7q3vr3vvf+1+EVf5MT08fVS6XNwHANBFtRET+97PCMFyHiOsA4JcAgP/m53EA+AURPW5Z1uNhGD6IiHv5DwDMNZvN+bm5uZ+vZpdxtRln2/azAODXEPEMInopIh5v2EYG6a4wDHcS0R2NRuOHeeVzEElJSDJHBIi6SCX9XeJePSv/dl23QkTnAcCrAOAkPdnaXHuJ6DOlUumm2dnZOW0phhjH1kI2bty4fmJi4veI6LUAcIohf1bE8Cur7t23iOjmZrN56969e/cbt0lCoLrJEkI7JHHtzrbtYwDw7YhwEQAcnixOL6IK5qWRLgLAjYh4ped5PzIkU0pMoYD0WlCr1Y5vNptvRcQ3AsBaKevGT7RMRP9YLpffW6/X50dhTuGA1Gq1dUEQvAsA3g4A5TxOjbHNNIno2qWlpXft27fvsTw+ZPEWCojjOC8DgGsB4OgsQxJ/HyMKMTY9CAB/6vv+TWkDqzxDJBxiziMt8oC7pyAIrgeAF6sCsbrin2j9l8IwvNDEkHlQg/EWYtv2KxDxk9GETRWPJw09Ef03ALxBCHGbSaOVAElrPDMzM2sOHjx4BQD8sdaA05BXI25hRER/21ohuFwIsWTCBSVA4hUiVCrTz7Ysa0ch8wkTXhYv425EfIXneQ/lVZUbkOh7cYexGbbUKy5FlDc2SvxE9AMiOrPRaHw3bR6WJXQIEJVverVarYZh+B8A8JwsRVq/5457kgAdwVI8DxHRWUKIe7T8zdPXV6vV08Iw5G7qCCnlQ/5IOSglOpuoOF1dySsqHiOis4UQX8+2a5hCq8tyq26NQvoqADxNR+n/AZ7HwjB8caPR+I6qr11A0ruqvpXZE4noLs5JqCrrpc/1zuZiTrbapFgi+llrif9X5+bmOBcT3xRi1uyVWkitVtsQBAGDcZJJ4/MAe4hXxhoZmnhL9Dnh+0S0VQjx0zQfB5MSUvGYmpqanJycZDDMLpUTAKHqSnk3RL8AgB8R0OOMSZRBfJ76pDRHyPuiFyvnbiJ6kew8RbqFuK57DRFdKvc2ymCsFQR+0z5DRDvL5fLuer3+cJwm13WfGQTBCy3LOgMAfhsAntmh09Iao4SAAFMTLn2arvZ9/20yUZECxHXd3+KsmuqozJTzAPBtRLxq/fr1/3rnnXc2ZRzr0Gzbtq28f//+lxPRO5Rat4bxKSw8oz9HCMGj0iiMMR8QmQBHEz8eLYxjRPUAIr7N87xPq4CQROs4zu8CwIcA4Nkm5KXJ6AUn+vcjrWnCL2ctSGa1EHQc50s6q7YGHN5BROcLIR6RHqJIKOVdLJZlcTbwNyXIjZIg4k7P816a9YFP/N227dcg4s1GrZIQRkTXCCHe2s05cJKA4pv4oeFA0m+JyvhFe3+0ECphkTkSRHx1WotPbCEzMzNHHjx4kHdh5JpvqLqCiH/led67Vfl06B3H4dXpd8p2PTo6YngeWFxcrLQzjzHvUiIgtm1/BBHfnNsImY9jRIOIH/c87/dz61QQYNv2dYh4YSaLjB+ZQroEMaOuQ+hEgPRDValUTkLEBiKW5HXkoySiPUtLS1v37dvHOz5G9hx33HFr161btwsAtoxMKUATEac9z/veoM7YFmLb9vWIeEF+A2VfK2oiWjOe59Xz61SXUKlUXMuyeCS5Rp1bm+MTvu/zDpy+ZwgQ3jeFiPtyGRfhIAsHIn7I87w/0nbNAGNSF93xQdYXBVOWWrslT6zX6z/u5RkCxHGcvwOAixUE5yU9GIbhCY1Gg3d0SD9aYyuWnsAY7Sn+PiIeJm2EMmE/rNFo8i2JgGzZsuUZi4uLPyzWqCEvrvN9/w3KvqkwSKDHJK7r3hASna8iWpe2PVAnWgjD8Hm9O/L7Woht25ci4jW6Sob4Btp5XLOPFt60kjnG7IwEua67jYi+kik3qf/S69cu8X3/ox2dfaMsx3G+DQSnaGxSzvQhgeCRljHPAIAw9neJN1tXcRzf9u3bS0II3mQ9ymWiu33ff8EAIAC2bduI6Jt0MEsWIv6L53uvVJ9ox0s2gZ/jOLwAyDsuzT8JLSgIgk2dRFa3y3Ic5yreJtm1Iq356TXNOAff4/v+X5r3XF+ibdtXIuKf60vQ4rzC9/2/YM5eQDjVONLDMoh4nud7N5lqIVqhGGByHOd1APCpzn9nvXvpv2dxd5U3fN+3u4CcfPLJz202m33j4Tjn9L5lyUYh4ss8z/s3E4HMJ2Ols7Nt++WIeHs+eerc5XL56Pvuu+8n7RbiOA4fJ7tRXUw+jtZmiTOEELy8X+yj8HGxbfslvExerEHD0onoXCHELR1AeHP060dtxFAL6QZOIYJ9RuvyrQgZVwshouuFEBd1AOGTqMeMAZDzPM/jsxar5hn8hozKMN6KKoQ4Afnw5Zo1a36mqlj6c5UuuDu6kNI/uF9GOS+VrcW27fci4p9lU5qnaO2kP4ozZ1sBgLf3jOO53ffFORoZv0JsZbztIuchGVZblnUquq57AfdfhXiYLfRR27bX33bbbUE2afEUY5qpdx0jgNd3cst/Ury78RrCMDyt0Wh8bST6M775tm2fjojFj/oSnLUQr+IW8jneMzSSgMQoIaIbhBDZKdQRGOg4zlhGm23XDn2UP8uA7Cai7uKWlN+GvuiRLq18iJSdbSK5oXByPsTQXFzO4G8wILOtXYmuHH1hVH/j+/5lhUmXAMZxHD4reEmxNiRIX8G8zt+Q+wHg2LEYsqKUt4ee4vv+fb12yL3bapbHyYxOgnFOPVdhAzVLhql5LsKAcP2op+sJM9p31Z96xBEv+Obu3Qt6tsRxZUM6pl0nSS7uZ0B4282EuSCkS0pd1Y+WD0ZlC39gHMe5IXnZyOgLJ3OOZXHkgEgE+0rf97k2SuHPOGflCc61AeGU5VGFe6+m4MO+7/O2oAIWR9qGWLZtfxgR+3Z8xPTqMgcE1DwbpO5vhO0uy8BH3XTTbp+G4iXwc3Mdxo/5hERrd38PAGfliaSKx7G0Mf/Z/qiPdNib4EWKcz9FxMs9z7slf2tBdBybq9f9ddaJKpVg5wE1hreOtm3vQsQXGhZsVBwifoeI3rd27dode/bsWe4Kzx5EAddgWVhY4II4nCffbNQwRWESQLcnhmNdOlHxiY8a8xlDy7J2BkGwO2m3Y6VS4dorp3JGEhH5jOF6FT1jpP3s2BcXtZ0/9Lo9ioi8F+BAJOcpvBMQEY/MlCvxumbKMEzA5yi5yzofEXksrvGsQq8yvVjVNr+Ouyxu2t/I9OP/CboRWIHULLi8yMst5OmIqF1+O94kvQ1DT0rMu67mB6edwuUgmJmLrK5w5g9PnD/FSGVN3U0OESDjS8ysLhzHaU37WMZYN8oV7X1x77N5ywnoNcIX/9AGZNOmTc8pl8s/Ma8mQ2JfxJ5M4TMeKQrD8Lk8r+qeD7Htylx0N0e2tjHEbgwqU+NgxJ4VIcL3fYcVdne/u677vqhASzYgq43CSHSKckrKuO6xjC4g09PTG0ul0kgKzhflur5cqaCp9L9KppRKpelOsf9DJZ+irIPjON8CgF9pSzNho5JZT25i3XC1SsvuFkKc2vF+8NDnJYjIuy+6j66ilPAuEtF+ROTEGP8dvQ6rAxAiQiBYT0DrEZHPPxad3r7Y932+sKD99AHCyZtyufxfho9FcwnuOzjhFATBlxuNBp9jXFUgpLwKWK1WXSI6nYheAgC/nlRQQfPFfSIIgmMSj0WzYSul/HK/sfuJ6ONBEFw7Pz//QG5pq0AATw9KpdLFiPgmE2lvIvpIVIaq611fC+H/rdVqRwdBwEVRdJsql7O7OQzDy1b7FXXJGKdnvrh01cLCwnta3S5vrLM035XFcrl8Ih9j6+UfAoR/dBznEwDtO6KUn6gKXPfQpLIAHYbU+EmkFXV08tGFbupCvcNKKkUVC4jrulwsmYuX6ezka6xZs+bUe++991FNPxXZigt4miGbN29+2vLy8i4gqGgUWlgulUqb6vX6DwZ1xALC33rHsa8GAC6zp/y0igf/54YNG35jqILoeGKXbr+sTT10XOn04Ycf/jwiptZPTFJMRB8UQlwe93sCIABTU1NHTE5ONnRvPiCijwkh/kAZzYhBNk668nPwcdr7YwAwVOtKUuaPiagihOiknfvYEgGJviWvbq093iqpaIgsAoVLPUW1TBTDnEGuKE3DjSENnNC7OnuDXbIqItouhOAayLHP8KVgA2SO4/CGNR6Daz1EdNOGDRsuUC2ArKWsQKaom/pkq7jbuW016t9x5vqi7/tnppmZ2kKYsVKpHGtZFl9QwrcyKzw9mWeizx122GHn7tmz54leAcW/4QrmppDOzMwcvri4eEvOk2Y/b1WI2JJ1c2gmIGyn67pnExFXyZGiT/BtLgzD7Y1Gw5MO0ypArFqtTgdB8E+IWJW2e5iQ52avFEJkluyQDrDjONqjro59RLTApWd9378uh3OGWZNRj0qO8DpT5752ad29PRoRfUAIwbfXZZ6wkwbEtu0JROTTss+XtiqZ8NZyuXz54Cy1Q262YahIO0TLqxXNZvODrVK5v6Pna98HZtfatWu39W2BTRG6AoiE3VFNxq9LZxbTvXmidd/HBw4cOPD++++//6Ce4ya4VhznfcCLi4t/SERc8fqpBqR/DxG3Du/gTw52dgsZ4I1m8bmvPOpxlq+Zu5JvZZa99MT0wGBq6qTJyckJHuJz2fEpA0CwiAdLpdLWuNl4mvxsQGK4o0OS3H2ZrE3IlzJ+qtlsXjOq1WFu8UtLS1wwmhcJ9S9QHo4R39S2rf/6vIE3O6GRaAHC+iuVyosQccfQxma98XmvS9x9fR4AdiwvL//73r17OZGl9qR0v1HO52wA4EJlfGjH6N3u0R25fG2ecv0YNlsbEI6QbdubEfELRd2gQERcA4Ud+zIR1cvlcn12dpYX5GQTXJxgOp6ITg7DsGZZ1ulhGG4tsKY9F4M+a/B4t8rblAsQVlStVk8Iw/AOApjKLUzO8scQURARXwj2KL+RiMg3N/N2zCMRkbtRPo7AR70r0hdfDujWaOjfLZVKZ6p+MwZdNhJDvoSLiG4HoOf3NjoNp9IhGdzYbFyB3BsRQ7VrYmLinHvuuUe57phRQHq76ujyrXe2uhk+0qybRdOOiDqjETRX4/Xd/aFwHIeLEHPGULM6hHpoTXLIwhR1lRf6vv/PSvqzVrAl5oNK+qIR2LGlUuk6CumMfMMGZdXJDH1rGXmHM/DF1lG6i7IWCnWsN/INSVLMrYUAPooAfPvmqnhkW0CCsbx75h2+7/M590KeQgFhi6PMI1/ydalmjl7J8ZwBT9K1zLdGhGH47qRMXxyjTu+jBIiOgo6h09PTx1mWdRkicurT6GRMCTE14qVWuvXTvLbVaDR4iSfxyRObXqFKgMj6kmZcNETmYmXcYg6XldlHV1Az6NHBFZJuLJVKVwxeSaRlrwJTIYDI6J+erhxVKlm8oMflLkws6cuoTaVBxG9yyjla6Iy5YVRGRb62kg1IPvkyHkB0FIKBeVU0u5biM0QkuDpEGIY3Z3VLHX1FhiQbEENey4qp1Wobms3maYjIV2/znxNkeSW7tQdbsu8Kw3CnZVlfKGLoynbogjZSQHSM5HP0RLSRL2KMEmMbo8VMTqtyEonXrp4SgcF7nXjH5P8A0AEAfAgR54loPgzD+XK5PD87O8trYAU8Ot4Nm/G/6blWNHtH2FwAAAAASUVORK5CYII="/>
                            </defs>
                        </svg>                  
                    </div>
                    <div class="input">
                        <div class="dropdown">
                            <select id="idType" name="idType">
                              <option value="" selected disabled>Select ID Type</option>
                              <option value="Integrated Bar of the Philippines">Integrated Bar of the Philippines</option>
                              <option value="Barangay ID">Barangay ID</option>
                              <option value="Driver’s License from Land Transportation Office (LTO)">Driver’s License from Land Transportation Office (LTO)</option>
                              <option value="Firearms License from Philippine National Police (PNP)">Firearms License from Philippine National Police (PNP)</option>
                              <option value="GSIS ID or GSIS UMID Card Government Service Insurance System (GSIS)">GSIS ID or GSIS UMID Card Government Service Insurance System (GSIS)</option>
                              <option value="iDOLE Card from Department of Labor and Employment (iDOLE)">iDOLE Card from Department of Labor and Employment (iDOLE)</option>
                              <option value="NBI Clearance from National Bureau of Investigation (NBI)">NBI Clearance from National Bureau of Investigation (NBI)</option>
                              <option value="OWWA ID Overseas Workers Welfare Administration (OWWA)">OWWA ID Overseas Workers Welfare Administration (OWWA)</option>
                              <option value="Persons with Disabilities (PWD) ID from Local Government Unit (LGU)">Persons with Disabilities (PWD) ID from Local Government Unit (LGU)</option>
                              <option value="PhilHealth ID (digitized PVC)">PhilHealth ID (digitized PVC)</option>
                              <option value="Philippine Passport from Department of Foreign Affairs">Philippine Passport from Department of Foreign Affairs</option>
                              <option value="Postal ID">Postal ID</option>
                              <option value="PRC ID from Professional Regulatory Commission (PRC)">PRC ID from Professional Regulatory Commission (PRC)</option>
                              <option value="Senior Citizen ID from Local Government Unit (LGU)">Senior Citizen ID from Local Government Unit (LGU)</option>
                              <option value="SSS ID or SSS UMID Card from Social Security System (SSS)">SSS ID or SSS UMID Card from Social Security System (SSS)</option>
                              <option value="TIN ID">TIN ID</option>
                              <option value="Voter’s Certification from the Officer of Election with Dry Seal">Voter’s Certification from the Officer of Election with Dry Seal</option>
                            </select>
                          </div>
                        <textarea placeholder="What is your concern?" name="content"></textarea>
                        <button type="submit">Post</button>
                    </div>
                </div><hr>
            </form>
            <div class="post-area">
                <div class="post">
                    <div class="specified-concern">
                        <strong><em><p></p></em></strong>
                        <p>•</p>
                        <em><p class="date"></p></em>
                    </div>
                    <div class="user-info">
                        <div class="user-icon">
                            <img src="valid_id/icons/user-icon" alt="">              
                        </div>
                        <p class="username"></p>
                    </div>
                    <p class="content"></p>

                    <!---------------------- COMMENT SECTION --------------------->
                    <div class="comment-section">
                        <div class="comment-outline" onclick="toggleComments()">
                            <img src="/New DavHow/valid_id/icons/speech_bubble.svg" alt="">
                            <p></p>
                        </div>
                        <div class="comments-content">
                            <hr>
                            <div class="comment">
                                <div class="user-info">
                                    <div class="user-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="none" viewBox="0 0 67 64">
                                            <path fill="url(#a)" d="M0 0h67v64H0z"/>
                                            <defs>
                                              <pattern id="a" width="1" height="1" patternContentUnits="objectBoundingBox">
                                                <use href="#b" transform="matrix(.00955 0 0 .01 .022 0)"/>
                                              </pattern>
                                              <image id="b" width="100" height="100" href="data:image/png;base64,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"/>
                                            </defs>
                                          </svg>                  
                                    </div>
                                    <p class="username"></p>
                                </div>
                                <div class="content">
                                    <p></p>
                                </div>
                                <hr>
                            </div>
                            <div class="comment">
                                <div class="user-info">
                                    <div class="user-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="none" viewBox="0 0 67 64">
                                            <path fill="url(#a)" d="M0 0h67v64H0z"/>
                                            <defs>
                                              <pattern id="a" width="1" height="1" patternContentUnits="objectBoundingBox">
                                                <use href="#b" transform="matrix(.00955 0 0 .01 .022 0)"/>
                                              </pattern>
                                              <image id="b" width="100" height="100" href="data:image/png;base64,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"/>
                                            </defs>
                                          </svg>                  
                                    </div>
                                    <p class="username">Username</p>
                                </div>
                                <div class="content">
                                    <p>Hello po uhm... What if kanang..</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FOOTER -->
    <footer>
        <div class="footerrow">
            <div class="col">
                <h3>What is Davhow?</h3>
                <p class="footertag">DavHow provides a comprehensive, user-friendly platform for accessing and acquiring various legal documents, complete with clear guidelines and requirements.</p>
                <div class="socmeds1">
                    <a rel="noopener noreferrer" href="#"><i class="ri-facebook-circle-fill"></i></a>
                    <a rel="noopener noreferrer" href="https://x.com/ART_Solutions23" target="_blank"><i class="ri-twitter-x-line"></i></a>
                    <a rel="noopener noreferrer" href="#"><i class="ri-mail-fill"></i></a>
                </div>
            </div>
            <div class="col">
                <h3>Visit Us</h3>
                <p>University of the Philippines Mindanao</p>
                <p>Tugbok, Davao City</p>
                <p>8000 Philippines</p>
            </div>
            <div class="col">
                <h3>Links</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Catalog</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Dashboard</a></li>
                </ul>
            </div>
            <div class="col">
              <h3>About DavHow</h3>
                <ul>
                    <li><a href="#">Our Services</a></li>
                    <li><a href="#">Rationale</a></li>
                    <li><a href="#">Vision and Mission</a></li>
                    <li><a href="#">Objectives</a></li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="copyright">&copy; 2024 <i>ART Solutions. All rights reserved.</i></p>
    </footer>
    <script src="/New DavHow/index.js"></script>
</body>
</html>

