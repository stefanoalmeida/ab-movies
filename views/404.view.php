<h2 style="margin-top: 12px; padding-left: 24px">
    Woooops! A página
    <span style="color: darkred">"<?=
        str_replace("/", "", parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH)); ?>"
        </span>
    não foi encontrada!
</h2>
