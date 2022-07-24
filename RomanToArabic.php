{\rtf1\ansi\ansicpg1252\cocoartf2578
\cocoatextscaling0\cocoaplatform0{\fonttbl\f0\fswiss\fcharset0 Helvetica;}
{\colortbl;\red255\green255\blue255;}
{\*\expandedcolortbl;;}
\margl1440\margr1440\vieww28600\viewh17440\viewkind0
\pard\tx720\tx1440\tx2160\tx2880\tx3600\tx4320\tx5040\tx5760\tx6480\tx7200\tx7920\tx8640\pardirnatural\partightenfactor0

\f0\fs24 \cf0 <?php\
read();\
function read() \{\
$number = readline('Enter Roman numeral: ');\
romanToInteger($number);\
\}\
function intValue($value) \{\
switch ($value) \{\
    case 'I':\
        return 1;\
    case 'V':\
        return 5;\
        break;\
    case 'X':\
        return 10;\
        break;\
    case 'L':\
        return 50;\
        break;\
    case 'C':\
        return 100;\
        break;\
    case 'D':\
        return 500;\
        break;\
    case 'M':\
        return 1000;\
        break;\
\}\
\}\
function romanToInteger($romanInput) \{\
$total = 0;\
for ($i = 0; $i < strlen($romanInput); $i++) \{\
$s1 = intValue($romanInput[$i]);\
if ($i + 1 < strlen($romanInput)) \
            \{\
                $s2 = intValue($romanInput[$i + 1]);\
                if ($s1 >= $s2) \
                \{\
                    $total = $total + $s1;\
                \}\
                else\
                \{\
                    $total = $total + $s2 - $s1;\
                    $i++;\
                \}\
            \}\
            else \{\
                  $total = $total + $s1;\
            \}\
\}\
echo $total . "\\n";\
$doAnother = readline("\\nDo Another? (Y/N) ");\
if($doAnother == 'Y') \{\
read();\
\}\
\}\
?>}