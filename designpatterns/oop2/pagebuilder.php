<?php
    class PageBuilder {
        public function createPage($page, $class) {
            $sHtml = $this->start();
            $sHtml .= $this->menu();
            $sHtml .= "<section>";
            $sHtml .= $this->content($page, $class);
            $sHtml .= $this->footer();
            return $sHtml;
        }

        private function content($page, $class) {
            if(file_exists("oop2/".$page.".php")) {
                require_once("oop2/".$page.".php");
                $objPage = new $class();
                return $objPage->getHtml();
            }
        }

        private function start() {
            $start = <<<START
                <!DOCTYPE html>
                <html lang="nl">
                    <head>
                        <meta charset="UTF-8">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>Vista nieuws</title>
                        <link rel="stylesheet" href="furniture/styles.css">
                    </head>
                    <body>
                        <header>
                            <h1>Vista Nieuws</h1>
                        </header>
START;
                return $start;
        }

        private function menu() {
            $menu = <<<MENU
                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="html.php">HTML</a></li>
                        <li><a href="php.php">PHP</a></li>
                        <li><a href="oop.php">OOP</a></li>
                        <li><a href="oop2.php">OOP2</a></li>
                        <li><a href="oop3.php">OOP3</a></li>
                        <li><a href="mvc.php">MVC</a></li>
                    </ul>
                </nav>
MENU;
            return $menu;
        }

        private function footer() {
            $end = "</section>";
            $end .= "<footer>Copyrights Vista College &copy; 2022</footer>";
            $end .= "</body>";
            $end .= "</html>";  
            return $end;
        }
    }