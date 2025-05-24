<?php
$text = "Hello World!";
//echo strlen($text); // Returns the length of the string
//echo str_word_count($text); // Returns the number of words in the string
//print_r(str_word_count($text, 1)); // Returns an array containing all the words in the string
//print_r(str_word_count($text, 2)); // Returns an associative array with the position of each word in the string
//echo strrev($text); // Returns the string in reverse order
//echo strpos($text, 'll'); // Returns the position of the first occurrence of 'll' in the string
//echo strpos($text, 'll',9); // Returns the position of the first occurrence of 'll' in the string, starting from position 9
//echo stripos($text, 'll'); // Returns the position of the first occurrence of 'll' in the string, case-insensitive
//echo stripos($text, 'll',9); // Returns the position of the first occurrence of 'll' in the string, case-insensitive, starting from position 9
//echo strpos($text,'Ll'); // Returns the position of the first occurrence of 'll' in the string CASE SENSITIVE
//echo strpos($text,'ll',9); // Returns the position of the first occurrence of 'll' in the string, starting from position 9 CASE SENSITIVE
//echo str_replace('ll','xx', $text); // Replaces all occurrences of 'll' in the string with 'XX'

//print_r(addcslashes('Hello World','ol'));
/*
 * Out put: D:\laragon\bin\php\php-8.1.10-Win32-vs16-x64\php.exe "D:\laragon\www\Php String Function\STRING.php"
H\e\l\l\o W\or\ld
Process finished with exit code 0
 */

//print_r(addslashes('Hello"teest" World'));
/*
 * The addslashes() function only escapes the following characters:

' (single quote)

" (double quote)

\ (backslash)

NULL (null byte)

The ampersand (&) is not a character that addslashes() escapes.

Output:
D:\laragon\bin\php\php-8.1.10-Win32-vs16-x64\php.exe "D:\laragon\www\Php String Function\STRING.php"
Hello\"teest\" World
Process finished with exit code 0
 */

//print_r(bin2hex("10"));
/*
 * The bin2hex() function:

একটি binary string (ASCII string) কে hexadecimal representation এ রূপান্তর করে।

প্রতিটি ক্যারেক্টারকে তার ASCII value অনুযায়ী 2-digit hexadecimal মানে রূপান্তর করে।
output:D:\laragon\bin\php\php-8.1.10-Win32-vs16-x64\php.exe "D:\laragon\www\Php String Function\STRING.php"
3130
Process finished with exit code 0
 */

//print_r(chop('Hello World!oo','o'));
/*
 * স্ট্রিংয়ের ডান পাশ (right side) থেকে $character_list-এর মধ্যে থাকা ক্যারেক্টার গুলো একাধিকবার থাকলেও কেটে ফেলে, যতক্ষণ না অন্য কোনো ক্যারেক্টার পাওয়া যায়।
 *Output: D:\laragon\bin\php\php-8.1.10-Win32-vs16-x64\php.exe "D:\laragon\www\Php String Function\STRING.php"
Hello World!
Process finished with exit code 0
 */

//print_r(chr(112));
/*
 *chr() PHP-র একটি ফাংশন যা একটি ASCII কোডকে তার সংশ্লিষ্ট ক্যারেক্টারে রূপান্তর করে।
🔹 এখানে ASCII কোড (0 থেকে 255 পর্যন্ত)।
🔹 এই কোডটি যে ক্যারেক্টারের প্রতিনিধিত্ব করে, সেটিই রিটার্ন করে।
OUTPUT: D:\laragon\bin\php\php-8.1.10-Win32-vs16-x64\php.exe "D:\laragon\www\Php String Function\STRING.php"
p
Process finished with exit code 0
 */
//print_r(chunk_split('HelloWorld', 2, '#'));
/*
 * chunk_split() ফাংশনটি PHP-তে এমন একটি স্ট্রিং ফাংশন, যা একটি স্ট্রিং-কে নির্দিষ্ট দৈর্ঘ্যের ছোট ছোট ভাগে ভাগ করে দেয় এবং প্রতিটি ভাগের পরে একটি নির্দিষ্ট ক্যারেক্টার (সাধারণত "\r\n" বা "\n") বসিয়ে দেয়।
 * Output:D:\laragon\bin\php\php-8.1.10-Win32-vs16-x64\php.exe "D:\laragon\www\Php String Function\STRING.php"
He#ll#oW#or#ld#
Process finished with exit code 0
 */

//print_r(convert_cyr_string('Nahid', 'd', 'w'));
/*
 * convert_cyr_string() হলো PHP-এর একটি বিল্ট-ইন ফাংশন, যেটি Cyrillic (সিরিলিক) টেক্সটকে এক এনকোডিং সিস্টেম থেকে অন্য এনকোডিং সিস্টেমে রূপান্তর করার জন্য ব্যবহৃত হয়।

📚 Cyrillic কী?
Cyrillic একটি অক্ষরমালা (alphabet) যা রাশিয়ান, ইউক্রেনিয়ান, বুলগেরিয়ান ইত্যাদি ভাষায় ব্যবহৃত হয়।
যেমন: т, е, к, с, т — এগুলো সিরিলিক অক্ষর।
 */

//print_r(convert_uuencode('Nahid'));
//
//print_r(convert_uudecode('%3F%H:60``'));
/*
 * Old enconding system
 */

//print_r(count_chars('Hello World!',3));
/*
 * print_r(count_chars('Hello World!', 3)); এই PHP কোডটি count_chars() ফাংশনের মাধ্যমে স্ট্রিং-এর ব্যবহৃত ক্যারেক্টারগুলোর ASCII মান অনুসারে sort করা ইউনিক ক্যারেক্টারগুলোর স্ট্রিং আকারে রিটার্ন
 *  সংক্ষেপে mode এর কাজ:
        Mode	Description	Output                    Type
        0	সব ক্যারেক্টার (used বা unused) ও তাদের count	Array
        1	শুধু ব্যবহৃত ক্যারেক্টার এবং তাদের count	            Array
        2	শুধু অব্যবহৃত ক্যারেক্টার এবং তাদের count	        Array
        3	শুধুমাত্র ব্যবহৃত ক্যারেক্টারগুলোর string (sorted)	    String
        4	শুধু অব্যবহৃত ক্যারেক্টারগুলোর string (sorted)	    String
OUTPUT: D:\laragon\bin\php\php-8.1.10-Win32-vs16-x64\php.exe "D:\laragon\www\Php String Function\STRING.php"
 !HWdelor
Process finished with exit code 0
 */

//print_r(crc32('Nahid'));
/*
 * PHP-র crc32() ফাংশনটি একটি CRC32 (Cyclic Redundancy Check) হ্যাশ তৈরি করে — এটি মূলত একটি 32-bit unsigned integer রিটার্ন করে, যেটি সাধারনত ডেটা চেক করার জন্য ব্যবহার করা হয় (ডেটা পরিবর্তিত হয়েছে কিনা তা চেক করতে)।
OUTPUT: D:\laragon\bin\php\php-8.1.10-Win32-vs16-x64\php.exe "D:\laragon\www\Php String Function\STRING.php"
442461796
Process finished with exit code 0
*/
//print_r(crypt('Nahid','hd'));
/*
 * PHP-এর crypt() ফাংশনটি একটি স্ট্রিং (সাধারণত পাসওয়ার্ড) কে one-way encryption/hash করে দেয়, যাতে সিকিউরিটি নিশ্চিত করা যায় — বিশেষ করে লগইন বা পাসওয়ার্ড যাচাইয়ের সময়।
 * $string → যেটি হ্যাশ করতে চাও (যেমন: পাসওয়ার্ড)
 * $salt → ঐচ্ছিক, হ্যাশিং প্রসেসে ব্যবহৃত একটি অতিরিক্ত মান (যেটা হ্যাশকে ইউনিক করে)
 * OUTPUT:D:\laragon\bin\php\php-8.1.10-Win32-vs16-x64\php.exe "D:\laragon\www\Php String Function\STRING.php"
hdoz9h2JeTuvA
Process finished with exit code 0
 */
//print_r(explode(' ', 'Hello World!')); //string to array
/*
 * explode() ফাংশনটি একটি স্ট্রিংকে নির্দিষ্ট ডেলিমিটার (যেমন: স্পেস, কমা, ইত্যাদি) ব্যবহার করে ছোট ছোট অংশে ভাগ করে দেয় এবং একটি অ্যারে রিটার্ন করে।
 * এখানে ' ' (স্পেস) ডেলিমিটার হিসেবে ব্যবহার করা হয়েছে, তাই স্ট্রিংটি স্পেস দিয়ে বিভক্ত হয়ে দুটি অংশে ভাগ হবে।
 * OUTPUT: D:\laragon\bin\php\php-8.1.10-Win32-vs16-x64\php.exe "D:\laragon\www\Php String Function\STRING.php"
Array
(
    [0] => Hello
    [1] => World!
)

Process finished with exit code 0
 */

//print_r(hebrev())
/*PHP-এর hebrev() ফাংশনটি একটি হিব্রু (Hebrew) টেক্সটকে দক্ষিণ-পশ্চিম এশীয় ভাষার ডান-থেকে-বামে লেখার ফর্ম্যাট অনুসারে রিভার্স করে। মূলত এটি হিব্রু টেক্সটকে logical order থেকে visual order এ কনভার্ট করে, যাতে কিছু পুরোনো ব্রাউজারে ঠিকমতো দেখা যা
*
*/
//print_r(hebrevc());
/*
 * PHP এর hebrevc() ফাংশনটি hebrev() এর মতোই কাজ করে, তবে এটিতে একদম এক্সট্রা সুবিধা হলো — টেক্সটের মধ্যে থাকা নতুন লাইন (\n) গুলোকে <br> HTML ব্রেক ট্যাগে রূপান্তর করে দেয়।
 */
//print_r(hex2bin('3130'));
/*
 * hex2bin() ফাংশনটি একটি হেক্সাডেসিমাল স্ট্রিংকে বাইনারি (বাইনারি ডেটা) রূপে রূপান্তর করে। এটি মূলত হেক্সাডেসিমাল মানকে তার বাইনারি প্রতিনিধিত্বে রূপান্তর করে।
 * Output:D:\laragon\bin\php\php-8.1.10-Win32-vs16-x64\php.exe "D:\laragon\www\Php String Function\STRING.php"
10
Process finished with exit code 0
 */
//print_r(html_entity_decode('&amp; &lt; &gt; &quot; &apos;'));
/*
 * html_entity_decode() ফাংশনটি HTML entities (যেমন: &amp;, &lt;, &gt;, &quot;, &apos;) কে তাদের আসল ক্যারেক্টারে রূপান্তর করে।
 * এটি মূলত HTML entities কে তাদের ASCII বা Unicode ক্যারেক্টারে রূপান্তর করে, যাতে সেগুলোকে সাধারণ টেক্সট হিসেবে ব্যবহার করা যায়।
 * OUTPUT: D:\laragon\bin\php\php-8.1.10-Win32-vs16-x64\php.exe "D:\laragon\www\Php String Function\STRING.php"
& < > " &apos;
Process finished with exit code 0
 */
//print_r(htmlentities('& & < > " \''));
/*
 * htmlentities() ফাংশনটি HTML entities কে তাদের ASCII বা Unicode ক্যারেক্টারে রূপান্তর করে, যাতে সেগুলোকে নিরাপদে HTML ডকুমেন্টে ব্যবহার করা যায়।
 * এটি মূলত HTML entities কে তাদের ASCII বা Unicode ক্যারেক্টারে রূপান্তর করে, যাতে সেগুলোকে সাধারণ টেক্সট হিসেবে ব্যবহার করা যায়।
 * OUTPUT: D:\laragon\bin\php\php-8.1.10-Win32-vs16-x64\php.exe "D:\laragon\www\Php String Function\STRING.php"
 * &amp; &amp; &lt; &gt; &quot; &#039;
 * Process finished with exit code 0
 */
//print_r(htmlspecialchars("<b>Faruque & Sons</b>"));
/*
 * htmlspecialchars() ফাংশনটি HTML entities কে তাদের ASCII বা Unicode ক্যারেক্টারে রূপান্তর করে, যাতে সেগুলোকে নিরাপদে HTML ডকুমেন্টে ব্যবহার করা যায়।
 * এটি মূলত HTML entities কে তাদের ASCII বা Unicode ক্যারেক্টারে রূপান্তর করে, যাতে সেগুলোকে সাধারণ টেক্সট হিসেবে ব্যবহার করা যায়।
 * OUTPUT: D:\laragon\bin\php\php-8.1.10-Win32-vs16-x64\php.exe "D:\laragon\www\Php String Function\STRING.php"
 * &lt;b&gt;Faruque &amp; Sons&lt;/b&gt;
 * Process finished with exit code 0
 */

//print_r(htmlspecialchars_decode('&lt;b&gt;Faruque &amp; Sons&lt;/b&gt;'));
/*
 * htmlspecialchars_decode() ফাংশনটি HTML entities কে তাদের আসল ক্যারেক্টারে রূপান্তর করে, যাতে সেগুলোকে সাধারণ টেক্সট হিসেবে ব্যবহার করা যায়।
 * এটি মূলত HTML entities কে তাদের ASCII বা Unicode ক্যারেক্টারে রূপান্তর করে, যাতে সেগুলোকে সাধারণ টেক্সট হিসেবে ব্যবহার করা যায়।
 * OUTPUT: D:\laragon\bin\php\php-8.1.10-Win32-vs16-x64\php.exe "D:\laragon\www\Php String Function\STRING.php"
 * <b>Faruque & Sons</b>
 * Process finished with exit code 0
 */

//print_r(implode(' ', ['Hello', 'World!'])); //array to string
/*
 * implode() ফাংশনটি একটি অ্যারে (array) কে একটি স্ট্রিং (string) এ রূপান্তর করে, যেখানে প্রতিটি অ্যারের উপাদানকে একটি নির্দিষ্ট ডেলিমিটার (যেমন: স্পেস, কমা, ইত্যাদি) দিয়ে যুক্ত করা হয়।
 * এখানে ' ' (স্পেস) ডেলিমিটার হিসেবে ব্যবহার করা হয়েছে, তাই অ্যারের উপাদানগুলো স্পেস দিয়ে বিভক্ত হয়ে একটি স্ট্রিং তৈরি হবে।
 * OUTPUT: D:\laragon\bin\php\php-8.1.10-Win32-vs16-x64\php.exe "D:\laragon\www\Php String Function\STRING.php"'
 * Hello World!
 * Process finished with exit code 0
 */
//print_r(join('-', ['Hello', 'World!'])); //array to string
/*
 * join() ফাংশনটি implode() এর একটি সমতুল্য ফাংশন, যা একটি অ্যারে (array) কে একটি স্ট্রিং (string) এ রূপান্তর করে, যেখানে প্রতিটি অ্যারের উপাদানকে একটি নির্দিষ্ট ডেলিমিটার (যেমন: স্পেস, কমা, ইত্যাদি) দিয়ে যুক্ত করা হয়।
 * এখানে '-' ডেলিমিটার হিসেবে ব্যবহার করা হয়েছে, তাই অ্যারের উপাদানগুলো হাইফেন দিয়ে বিভক্ত হয়ে একটি স্ট্রিং তৈরি হবে।
 * OUTPUT: D:\laragon\bin\php\php-8.1.10-Win32-vs16-x64\php.exe "D:\laragon\www\Php String Function\STRING.php"
 * Hello-World!
 * Process finished with exit code 0
 */

//print_r(lcfirst("NAHID"));
/*
 * lcfirst() ফাংশনটি একটি স্ট্রিং-এর প্রথম ক্যারেক্টারকে ছোট হাতের (lowercase) অক্ষরে রূপান্তর করে।
 * এটি মূলত স্ট্রিং-এর প্রথম ক্যারেক্টারকে ছোট হাতের অক্ষরে রূপান্তর করে, যাতে স্ট্রিংটি সাধারণত ছোট হাতের অক্ষরে শুরু হয়।
 * OUTPUT: D:\laragon\bin\php\php-8.1.10-Win32-vs16-x64\php.exe "D:\laragon\www\Php String Function\STRING.php"
 * nAHID
 * Process finished with exit code 0
 */
//print_r(levenshtein('kitten', 'sitting'));
/*
 * levenshtein() ফাংশনটি দুটি স্ট্রিং-এর মধ্যে লেভেনস্টেইন দূরত্ব (Levenshtein distance) নির্ণয় করে, যা মূলত দুটি স্ট্রিং-এর মধ্যে ক্যারেক্টার পরিবর্তন, যোগ বা মুছে ফেলার মাধ্যমে একটি স্ট্রিংকে অন্য স্ট্রিং-এ রূপান্তর করতে প্রয়োজনীয় সর্বনিম্ন অপারেশন সংখ্যা নির্দেশ করে।
 * OUTPUT: D:\laragon\bin\php\php-8.1.10-Win32-vs16-x64\php.exe "D:\laragon\www\Php String Function\STRING.php"
 * 3
 * Process finished with exit code 0
 */
//print_r(localeconv());
/*
 * localeconv() ফাংশনটি বর্তমান লোকেল (locale) এর জন্য বিভিন্ন সংখ্যার ফরম্যাটিং সম্পর্কিত তথ্য প্রদান করে, যেমন: দশমিক সিম্বল, হাজারের সিম্বল, মুদ্রা সিম্বল ইত্যাদি।
 * এটি মূলত লোকেল অনুযায়ী সংখ্যার ফরম্যাটিং সম্পর্কিত তথ্য প্রদান করে, যা বিভিন্ন ভাষা ও সংস্কৃতির জন্য ভিন্ন হতে পারে।
 * OUTPUT: D:\laragon\bin\php\php-8.1.10-Win32-vs16-x64\php.exe "D:\laragon\www\Php String Function\STRING.php"
 * Array
 * (
    [decimal_point] => .
    [thousands_sep] => ,
    [int_curr_symbol] => USD
    [currency_symbol] => $
    [mon_decimal_point] => .
    [mon_thousands_sep] => ,
    [positive_sign] =>
    [negative_sign] => -
    [int_frac_digits] => 2
    [frac_digits] => 2
    [p_cs_precedes] => 1
    [p_sep_by_space] => 0
    [n_cs_precedes] => 1
    [n_sep_by_space] => 0
    [p_sign_posn] => 1
    [n_sign_posn] => 1
    [int_p_cs_precedes] => 1
    [int_p_sep_by_space] => 0
    [int_n_cs_precedes] => 1

 *
 */
//print_r(ltrim('p   Hello World!   p', 'p '));
/*
 * ltrim() ফাংশনটি একটি স্ট্রিং-এর বাম পাশ থেকে নির্দিষ্ট ক্যারেক্টার বা ক্যারেক্টারগুলিকে সরিয়ে দেয়।
 * এখানে 'p ' ডেলিমিটার হিসেবে ব্যবহার করা হয়েছে, তাই স্ট্রিং-এর বাম পাশ থেকে 'p' এবং স্পেস সরিয়ে দেওয়া হবে।
 * OUTPUT: D:\laragon\bin\php\php-8.1.10-Win32-vs16-x64\php.exe "D:\laragon\www\Php String Function\STRING.php"
 * Hello World!   p
 * Process finished with exit code 0
 */

//print_r(md5("Nahid"));
/*
 * md5() ফাংশনটি একটি স্ট্রিং-এর MD5 হ্যাশ তৈরি করে, যা মূলত একটি 128-বিট হ্যাশ মান রিটার্ন করে। এটি সাধারণত ডেটা ইন্টেগ্রিটি চেক করার জন্য ব্যবহৃত হয়।
 * OUTPUT: D:\laragon\bin\php\php-8.1.10-Win32-vs16-x64\php.exe "D:\laragon\www\Php String Function\STRING.php"
 * 2c6ee24b09816a6f14f95d1698b24ead
 * Process finished with exit code 0
 */

//md5_file("D:\laragon\www\Php String Function\STRING.php");
/*
 * md5_file() ফাংশনটি একটি ফাইলের কনটেন্টের MD5 হ্যাশ তৈরি করে, যা মূলত একটি 128-বিট হ্যাশ মান রিটার্ন করে। এটি সাধারণত ফাইলের ইন্টেগ্রিটি চেক করার জন্য ব্যবহৃত হয়।
 * OUTPUT: D:\laragon\bin\php\php-8.1.10-Win32-vs16-x64\php.exe "D:\laragon\www\Php String Function\STRING.php"
 * 2c6ee24b09816a6f14f95d1698b24ead
 * Process finished with exit code 0
 */
//print_r(metaphone('Nahid'));
/*
 * metaphone() ফাংশনটি একটি স্ট্রিং-এর ফনেটিক রিপ্রেজেন্টেশন তৈরি করে, যা মূলত শব্দের উচ্চারণের ভিত্তিতে একটি ফনেটিক কোড রিটার্ন করে। এটি সাধারণত শব্দের উচ্চারণের সাথে সম্পর্কিত তথ্য প্রদান করে।
 * OUTPUT: D:\laragon\bin\php\php-8.1.10-Win32-vs16-x64\php.exe "D:\laragon\www\Php String Function\STRING.php"
 * NHT
 * Process finished with exit code 0
 */
//print_r(money_format('%i', 123456.78)); // dont used php 8+
/*
 * money_format() ফাংশনটি একটি সংখ্যাকে মুদ্রা ফরম্যাটে রূপান্তর করে, যা মূলত লোকেল অনুযায়ী মুদ্রার সিম্বল এবং ফরম্যাটিং ব্যবহার করে। এটি সাধারণত মুদ্রা মান প্রদর্শনের জন্য ব্যবহৃত হয়।
 * OUTPUT: D:\laragon\bin\php\php-8.1.10-Win32-vs16-x64\php.exe "D:\laragon\www\Php String Function\STRING.php"
 * $123,456.78
 * Process finished with exit code 0
 */

//print_r(nl_langinfo());
/*
 * nl_langinfo() ফাংশনটি বর্তমান লোকেল (locale) এর জন্য বিভিন্ন ভাষা ও সংস্কৃতির তথ্য প্রদান করে, যেমন: ভাষার নাম, দেশ, মুদ্রা সিম্বল ইত্যাদি। এটি মূলত লোকেল অনুযায়ী ভাষা ও সংস্কৃতির তথ্য প্রদান করে।
 * OUTPUT: D:\laragon\bin\php\php-8.1.10-Win32-vs16-x64\php.exe "D:\laragon\www\Php String Function\STRING.php"
 * Array
 * (
    [int_curr_symbol] => USD
    [currency_symbol] => $
    [mon_decimal_point] => .
    [mon_thousands_sep] => ,
    [positive_sign] =>
    [negative_sign] => -
    [int_frac_digits] => 2
    [frac_digits] => 2
    [p_cs_precedes] => 1
    [p_sep_by_space] => 0
    [n_cs_precedes] => 1
    [n_sep_by_space] => 0
    [p_sign_posn] => 1
    [n_sign_posn] => 1
    [int_p_cs_precedes] => 1
    [int_p_sep_by_space] => 0
    [int_n_cs_precedes] => 1

 *
 */