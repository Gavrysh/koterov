<?php ## Складання URL по масиву параметрів

// Складає URL по частина з масиву $parsed.
// Функція зворотня до parse_url()
function http_build_url($parsed)
{
    if (!is_array($parsed)) {
        return false;
    }

    // Протокол заданий?
    if (isset($parsed['scheme'])) {
        $sep = strtolower($parsed['scheme']) == 'mailto' ? ':' : '://';
        $url = $parsed['scheme'].$sep;
    } else {
        $url = '';
    }

    // Задані ім'я користувача та пароль?
    if (isset($parsed['pass'])) {
        $url .= "$parsed[user]:$parsed[pass]@";
    } elseif (isset($parsed['user'])) {
        $url .= "$parsed[user]@";
    }

    // QUERY_STRING представлена у вигляді масиву?
    if (@!is_scalar($parsed['query'])) {
        // Перетворюємо у строку
        $parsed['query'] = http_build_query($parsed['query']);
    }

    // Далі складаємо URL
    isset($parsed['host']) ? $url .= $parsed['host'] : '';
    isset($parsed['port']) ? $url .= $parsed['port'] : '';
    isset($parsed['path']) ? $url .= $parsed['path'] : '';
    isset($parsed['query']) ? $url .= $parsed['query'] : '';
    isset($parsed['fragment']) ? $url .= '#'.$parsed['fragment'] : '';

    return $url;
}
