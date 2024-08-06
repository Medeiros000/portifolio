<!DOCTYPE html>
<html lang="pt-br">
<?php

include_once 'helpers/f-functions.php';
include_once 'helpers/h-functions.php';
include_once 'helpers/languages.php';
include_once 'helpers/access.php';
saveAccess();

// If the user has a cookie with the theme, it will be used, otherwise it will be light
$theme = $_COOKIE['theme'] ?? 'light';
// If the user has a cookie with the language, it will be used, otherwise it will be pt
$lang = $_COOKIE['lang'] ?? f_lang();

// echo $lang;
echo h_head();
?>
<link rel="stylesheet" href="css/<?php echo $theme; ?>-theme.css">

<body>
    <?php debug_jr($_POST);
    debug_jr($_COOKIE); ?>
    <div class="container">
        <header class="header">
            <div class="me">
                <h1 class="">
                    <a href="/portifolio/">Jr Medeiros</a>
                </h1>
                <h4 class=""><?php echo $l_index['job'][$lang] ?></h4>
                <p class="">
                    <?php echo $l_index['desc'][$lang] ?>
                </p>
                <nav class="" aria-label="In-page jump links">
                    <ul class="marker">
                        <li>
                            <input type="button" value="> <?php echo $l_index['about'][$lang] ?>" onclick="send_form('about')">
                        </li>
                        <li>
                            <input type="button" value="> <?php echo $l_index['experience'][$lang] ?>" onclick="send_form('experience')">
                        </li>
                        <li>
                            <input type="button" value="> <?php echo $l_index['projects'][$lang] ?>" onclick="send_form('projects')">
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <ul class="social" aria-label="Social media">
                <li class="">
                    <a class="links" href="https://github.com/Medeiros000" target="_blank" rel="noreferrer noopener" aria-label="GitHub (opens in a new tab)" title="GitHub">
                        <span class="">GitHub</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="" aria-hidden="true">
                            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z">
                            </path>
                        </svg>
                    </a>
                </li>
                <li class="">
                    <a class="links" href="https://www.linkedin.com/in/jr-medeiros/" target="_blank" rel="noreferrer noopener" aria-label="LinkedIn (opens in a new tab)" title="LinkedIn">
                        <span class="">LinkedIn</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="" aria-hidden="true">
                            <path d="M20.5 2h-17A1.5 1.5 0 002 3.5v17A1.5 1.5 0 003.5 22h17a1.5 1.5 0 001.5-1.5v-17A1.5 1.5 0 0020.5 2zM8 19H5v-9h3zM6.5 8.25A1.75 1.75 0 118.3 6.5a1.78 1.78 0 01-1.8 1.75zM19 19h-3v-4.74c0-1.42-.6-1.93-1.38-1.93A1.74 1.74 0 0013 14.19a.66.66 0 000 .14V19h-3v-9h2.9v1.3a3.11 3.11 0 012.7-1.4c1.55 0 3.36.86 3.36 3.66z">
                            </path>
                        </svg>
                    </a>
                </li>
                <!-- outlook -->
                <li class="">
                    <a class="links" href="mailto:<?php echo $l_about['email'] ?>" aria-label="Outlook" title="Outlook">
                        <span class="">Outlook</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" fill="currentColor">
                            <path d="M 28.8125 0.03125 L 0.8125 5.34375 C 0.339844 5.433594 0 5.863281 0 6.34375 L 0 43.65625 C 0 44.136719 0.339844 44.566406 0.8125 44.65625 L 28.8125 49.96875 C 28.875 49.980469 28.9375 50 29 50 C 29.230469 50 29.445313 49.929688 29.625 49.78125 C 29.855469 49.589844 30 49.296875 30 49 L 30 1 C 30 0.703125 29.855469 0.410156 29.625 0.21875 C 29.394531 0.0273438 29.105469 -0.0234375 28.8125 0.03125 Z M 32 11 L 32 23.15625 L 33.75 24.59375 L 49 15.5 L 49 12 C 49 11.449219 48.554688 11 48 11 Z M 14.84375 15.53125 C 17.222656 15.53125 19.15625 16.390625 20.625 18.09375 C 22.09375 19.800781 22.8125 22.023438 22.8125 24.8125 C 22.8125 27.679688 22.054688 29.992188 20.53125 31.75 C 19.007813 33.503906 17.042969 34.40625 14.59375 34.40625 C 12.207031 34.40625 10.253906 33.542969 8.75 31.84375 C 7.246094 30.144531 6.5 27.917969 6.5 25.1875 C 6.5 22.304688 7.253906 19.96875 8.78125 18.1875 C 10.308594 16.40625 12.324219 15.53125 14.84375 15.53125 Z M 49 17.84375 L 34.1875 26.6875 C 34.027344 26.78125 33.832031 26.8125 33.65625 26.8125 C 33.429688 26.8125 33.214844 26.746094 33.03125 26.59375 L 32 25.75 L 32 38 L 34.0625 38 C 34.019531 38.328125 34 38.660156 34 39 C 34 43.410156 37.589844 47 42 47 C 46.410156 47 50 43.410156 50 39 C 50 37.585938 49.617188 36.25 48.96875 35.09375 C 48.972656 35.058594 49 35.035156 49 35 Z M 14.75 19.0625 C 13.433594 19.0625 12.367188 19.605469 11.59375 20.6875 C 10.816406 21.769531 10.4375 23.1875 10.4375 24.96875 C 10.4375 26.773438 10.820313 28.226563 11.59375 29.28125 C 12.371094 30.332031 13.398438 30.84375 14.65625 30.84375 C 15.949219 30.84375 16.957031 30.332031 17.71875 29.3125 C 18.476563 28.292969 18.875 26.878906 18.875 25.0625 C 18.875 23.171875 18.519531 21.707031 17.78125 20.65625 C 17.042969 19.601563 16.027344 19.0625 14.75 19.0625 Z M 42 33 C 45.308594 33 48 35.691406 48 39 C 48 42.308594 45.308594 45 42 45 C 38.691406 45 36 42.308594 36 39 C 36 35.691406 38.691406 33 42 33 Z M 41 34 L 41 41 L 46 41 L 46 39 L 43 39 L 43 34 Z" />
                        </svg>

                    </a>
                </li>
            </ul>
            <button class="lang-switch" onclick="changeLanguage()">
                <?php
                $class_pt = $lang === 'pt' ? 'grayscale' : '';
                $class_en = $lang === 'en' ? 'grayscale' : '';
                echo "<img class='flag $class_pt' src='img/en.svg' alt=''>";
                echo "<span>/</span>";
                echo "<img class='flag $class_en' src='img/pt.svg' alt=''>";
                ?>
            </button>

        </header>
        <div class="content">
            <?php
            if (!isset($_POST['page'])) {
                $_POST['page'] = 'about';
            }

            match ($_POST['page']) {
                'about' => include_once 'about.php',
                'experience' => include_once 'experience.php',
                'projects' => include_once 'projects.php',
                '403' => error($l_index['403'][$lang], $l_index['403-s'][$lang]),
                '404' => error($l_index['404'][$lang], $l_index['404-s'][$lang]),
                '500' => error($l_index['500'][$lang], $l_index['500-s'][$lang]),
                default => include_once 'about.php',
            };
            unset($_POST['page']);
            ?>
        </div>
        <button class="theme-switch" onclick="changeTheme()">
            <?php echo $theme === 'light' ? $l_index['theme']['dark'][$lang] : $l_index['theme']['light'][$lang]; ?>
        </button>

    </div>
    <div id="post">
    </div>
    <script>
        function changeTheme() {
            let currentTheme = '<?php echo $theme; ?>';
            let newTheme = currentTheme === 'light' ? 'dark' : 'light';
            document.cookie = "theme=" + newTheme;
            window.location.reload();
        }

        function changeLanguage() {
            let currentLang = '<?php echo $lang; ?>';
            let newLang = currentLang === 'pt' ? 'en' : 'pt';
            document.cookie = "lang=" + newLang;
            window.location.reload();
        }

        function changeLanguage2() {
            let currentLang = '<?php echo $lang; ?>';
            let newLang = currentLang === 'pt' ? 'en' : 'pt';
            document.cookie = "lang=" + newLang;
            window.location.reload();
        }
    </script>
</body>

</html>