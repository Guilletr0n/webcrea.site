<?php

class View {
    const TEMPLATES_DIR =  __DIR__ . '/../templates';
    const LOCALES_DIR =    __DIR__ . '/../locales';
    const COMPONENTS_DIR = __DIR__ . '/../components';

    private $locale;
    private $translations;

    function __construct() {
        $this->locale = 'fr-FR';
        $this->translations = [];
    }

    function component($name, $viewParams = []) {
        $res = false;
        $path = self::COMPONENTS_DIR . '/' . $name . '.php';

        if (file_exists($path)) {
            include($path);

            $res = true;
        }

        return $res;
    }

    function getLocale() {
        return $this->locale;
    }

    function load_translation($filename) {
        $path = self::LOCALES_DIR . '/' . $this->locale . '/' . $filename . '.json';

        if (file_exists($path)) {
            $this->translations[$filename] = json_decode(
                file_get_contents($path),
                true
            );
        }
    }

    function setLocale($locale) {
        $this->locale = $locale;
    }

    function templatePart($name) {
        require_once(self::TEMPLATES_DIR . '/' . $name . '.php');
    }

    function translate($name) {
        $s = explode('.', $name);
        $n = count($s);

        if ($n > 0) {
            $file = $s[0];

            if (!isset($this->translations[$file])) {
                $this->load_translation($file);
            }

            $test = $this->getVarWithSeparator($name, $this->translations);
            if (is_string($test)) {
                return $test;
            }
        }

        return '';
    }

    //

    function getVarWithSeparator($access, $collection, $separator = '.') {
        $s = explode($separator, $access);
        $n = count($s);
        $current = $collection;

        for ($i = 0; $i < $n; $i++) {
            $key = $s[$i];

            if (isset($current[$key])) {
                $current = $current[$key];
            } else {
                break;
            }
        }

        if ($i === $n) {
            return $current;
        }

        return NULL;
    }

}
