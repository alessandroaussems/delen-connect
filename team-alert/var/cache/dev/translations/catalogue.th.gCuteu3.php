<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('th', array (
  'validators' => 
  array (
    'This value should be false.' => 'ค่านี้ควรจะเป็น false',
    'This value should be true.' => 'ค่านี้ควรจะเป็น true',
    'This value should be of type {{ type }}.' => 'ค่านี้ควรจะเป็นชนิด {{ type }}',
    'This value should be blank.' => 'ควรจะเป็นค่าว่าง',
    'The value you selected is not a valid choice.' => 'คุณเลือกค่าที่ไม่ตรงกับตัวเลือก',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'คุณต้องเลือกอย่างน้อย {{ limit }} ตัวเลือก',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'คุณเลือกได้มากที่สุด {{ limit }} ตัวเลือก',
    'One or more of the given values is invalid.' => 'มีบางค่าที่ส่งมาไม่ถูกต้อง',
    'This field was not expected.' => 'ฟิลด์นี้ที่ไม่ได้คาดหวัง',
    'This field is missing.' => 'ฟิลด์นี้จะหายไป',
    'This value is not a valid date.' => 'ค่าของวันที่ไม่ถูกต้อง',
    'This value is not a valid datetime.' => 'ค่าของวันที่และเวลาไม่ถูกต้อง',
    'This value is not a valid email address.' => 'ค่าของอีเมล์ไม่ถูกต้อง',
    'The file could not be found.' => 'ไม่พบไฟล์',
    'The file is not readable.' => 'ไฟล์ไม่อยู่ในสถานะที่สามารถอ่านได้',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'ไฟล์ใหญ่เกิน ({{ size }} {{ suffix }}) อนุญาตให้ใหญ่ที่สุดได้ไม่เกิน {{ limit }} {{ suffix }}',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Mime type ของไฟล์ไม่ถูกต้อง ({{ type }}) Mime types ที่อนุญาตคือ {{ types }}',
    'This value should be {{ limit }} or less.' => 'ค่านี้ควรจะเป็น {{ limit }} หรือน้อยกว่านั้น',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'ค่านี้ยาวเกินไป ควรจะมีแค่ {{ limit }} ตัวอักษรหรือน้อยกว่านั้น',
    'This value should be {{ limit }} or more.' => 'ค่านี้ควรจะมี {{ limit }} หรือมากกว่านั้น',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'ค่านี้สั้นเกินไป ควรจะมี {{ limit }} ตัวอักษรหรือมากกว่านั้น',
    'This value should not be blank.' => 'ค่านี้ไม่ควรเป็นค่าว่าง',
    'This value should not be null.' => 'ค่านี้ไม่ควรเป็นค่า null',
    'This value should be null.' => 'ค่านี้ควรเป็นค่า null',
    'This value is not valid.' => 'ค่านี้ไม่ถูกต้อง',
    'This value is not a valid time.' => 'ค่าของเวลาไม่ถูกต้อง',
    'This value is not a valid URL.' => 'ค่าของ URL ไม่ถูกต้อง',
    'The two values should be equal.' => 'ค่าทั้งสองค่าควรจะเหมือนกัน',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'ขนาดไฟล์ใหญ่เกินไป อนุญาตให้ไฟล์ขนาดใหญ่ได้ไม่เกิน {{ limit }} {{ suffix }}',
    'The file is too large.' => 'ขนาดไฟล์ใหญ่เกินไป',
    'The file could not be uploaded.' => 'ไม่สามารถอัปโหลดไฟล์ได้',
    'This value should be a valid number.' => 'ค่าของตัวเลขไม่ถูกต้อง',
    'This file is not a valid image.' => 'ไฟล์นี้ไม่ใช่ไฟล์รูปภาพ',
    'This is not a valid IP address.' => 'ค่าของ IP ไม่ถูกต้อง',
    'This value is not a valid language.' => 'ค่าของภาษาไม่ถูกต้อง',
    'This value is not a valid locale.' => 'ค่าของภูมิภาค (Locale) ไม่ถูกต้อง',
    'This value is not a valid country.' => 'ค่าของประเทศไม่ถูกต้อง',
    'This value is already used.' => 'Tค่านี้ถูกใช้งานไปแล้ว',
    'The size of the image could not be detected.' => 'ไม่สามารถตรวจสอบขนาดไฟล์ของภาพได้',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'ความกว้างของภาพเกินขนาด ({{ width }}px) อนุญาตให้กว้างได้มากที่สุด {{ max_width }}px',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'ความกว้างของภาพไม่ได้ขนาด ({{ width }}px) อนุญาตให้สั้นที่สุด {{ min_width }}px',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'ความสูงของภาพเกินขนาด ({{ height }}px) อนุญาตให้สูงได้มากที่สุด {{ max_height }}px',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'ความสูงของภาพไม่ได้ขนาด ({{ height }}px) อนุญาตให้สูงอย่างน้อยที่สุด {{ min_height }}px',
    'This value should be the user\'s current password.' => 'ค่านี้ควรจะเป็นรหัสผ่านปัจจุบันของผู้ใช้',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'ค่านี้ควรจะมีความยาว {{ limit }} ตัวอักษร',
    'The file was only partially uploaded.' => 'อัปโหลดไฟล์ได้เพียงบางส่วนเท่านั้น',
    'No file was uploaded.' => 'ไม่มีไฟล์ใดถูกอัปโหลด',
    'No temporary folder was configured in php.ini.' => 'ไม่พบไฟล์ temp ควรจะกำหนดใน php.ini',
    'Cannot write temporary file to disk.' => 'ไม่สามารถเขียน temp ไฟล์ลงดิสก์ได้',
    'A PHP extension caused the upload to fail.' => 'PHP extension เกี่ยวกับการอัปโหลดมีปัญหา',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'คอเล็กชั่นนี้ควรจะประกอบไปด้วยอ่างน้อย {{ limit }} สมาชิก',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'คอเล็กชั่นนี้ไม่ควรมีสมาชิกเกิน {{ limit }}',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'คอเล็กชั่นนี้ควรจะมีสมาชิก {{ limit }} เท่านั้น',
    'Invalid card number.' => 'หมายเลขบัตรไม่ถูกต้อง',
    'Unsupported card type or invalid card number.' => 'ไม่รู้จักประเภทของบัตร หรือหมายเลขบัตรไม่ถูกต้อง',
    'This is not a valid International Bank Account Number (IBAN).' => 'นี่ไม่ถูกต้องตาม International Bank Account Number (IBAN)',
    'This value is not a valid ISBN-10.' => 'ค่านี้ไม่ถูกต้องตาม ISBN-10',
    'This value is not a valid ISBN-13.' => 'ค่านี้ไม่ถูกต้องตาม ISBN-13',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'ค่านี้ไม่ถูกต้องตามทั้ง ISBN-10 และ ISBN-13',
    'This value is not a valid ISSN.' => 'ค่านี้ไม่ถุกต้องตาม ISSN',
    'This value is not a valid currency.' => 'ค่านี้ไม่ถูกต้องตามสกุลเงิน',
    'This value should be equal to {{ compared_value }}.' => 'ค่านี้ไม่ตรงกับ {{ compared_value }}',
    'This value should be greater than {{ compared_value }}.' => 'ค่านี้ควรจะมากกว่า {{ compared_value }}',
    'This value should be greater than or equal to {{ compared_value }}.' => 'ค่านี้ควรจะมากกว่าหรือตรงกับ {{ compared_value }}',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'ค่านี้ควรจะเหมือนกันกับ {{ compared_value_type }} {{ compared_value }}',
    'This value should be less than {{ compared_value }}.' => 'ค่านี้ควรจะน้อยกว่า {{ compared_value }}',
    'This value should be less than or equal to {{ compared_value }}.' => 'ค่านี้ควรจะน้อยกว่าหรือเท่ากับ {{ compared_value }}',
    'This value should not be equal to {{ compared_value }}.' => 'ค่านี้ไม่ควรเท่ากันกับ {{ compared_value }}',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'ค่านี้ไม่ควรเหมือนกันกับ {{ compared_value_type }} {{ compared_value }}',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'สัดส่วนของภาพใหญ่เกิน ({{ ratio }}) สามารถมีขนาดใหญ่ที่สุดได้ {{ max_ratio }}',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'สัดส่วนของภาพเล็กเกิน ({{ ratio }}) สามารถมีขนาดเล็กที่สุดได้ {{ min_ratio }}',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'รูปภาพเป็นจุตรัส ({{ width }}x{{ height }}px) ไม่อนุญาตภาพที่เป็นสี่เหลี่ยมจตุรัส',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'ภาพนี้เป็นแนวนอน ({{ width }}x{{ height }}px) ไม่อนุญาตภาพที่เป็นแนวนอน',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'ภาพนี้เป็นแนวตั้ง ({{ width }}x{{ height }}px) ไม่อนุญาตภาพที่เป็นแนวตั้ง',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'พบความผิดพลาดในการรับรองตัวตน',
    'Authentication credentials could not be found.' => 'ไม่พบข้อมูลในการรับรองตัวตน (credentials) ',
    'Authentication request could not be processed due to a system problem.' => 'คำร้องในการรับรองตัวตนไม่สามารถดำเนินการได้ เนื่องมาจากปัญหาของระบบ',
    'Invalid credentials.' => 'ข้อมูลการรับรองตัวตนไม่ถูกต้อง',
    'Cookie has already been used by someone else.' => 'Cookie ถูกใช้งานไปแล้วด้วยผู้อื่น',
    'Not privileged to request the resource.' => 'ไม่ได้รับสิทธิ์ให้ใช้งานส่วนนี้ได้',
    'Invalid CSRF token.' => 'CSRF token ไม่ถูกต้อง',
    'No authentication provider found to support the authentication token.' => 'ไม่พบ authentication provider ที่รองรับสำหรับ authentication token',
    'No session available, it either timed out or cookies are not enabled.' => 'ไม่มี session ที่พร้อมใช้งาน, Session หมดอายุไปแล้วหรือ cookies ไม่ถูกเปิดใช้งาน',
    'No token could be found.' => 'ไม่พบ token',
    'Username could not be found.' => 'ไม่พบ Username',
    'Account has expired.' => 'บัญชีหมดอายุไปแล้ว',
    'Credentials have expired.' => 'ข้อมูลการระบุตัวตนหมดอายุแล้ว',
    'Account is disabled.' => 'บัญชีถูกระงับแล้ว',
    'Account is locked.' => 'บัญชีถูกล็อกแล้ว',
  ),
));

$catalogueNl = new MessageCatalogue('nl', array (
  'validators' => 
  array (
    'This value should be false.' => 'Deze waarde moet onwaar zijn.',
    'This value should be true.' => 'Deze waarde moet waar zijn.',
    'This value should be of type {{ type }}.' => 'Deze waarde moet van het type {{ type }} zijn.',
    'This value should be blank.' => 'Deze waarde moet leeg zijn.',
    'The value you selected is not a valid choice.' => 'De geselecteerde waarde is geen geldige optie.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Selecteer ten minste {{ limit }} optie.|Selecteer ten minste {{ limit }} opties.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Selecteer maximaal {{ limit }} optie.|Selecteer maximaal {{ limit }} opties.',
    'One or more of the given values is invalid.' => 'Eén of meer van de ingegeven waarden zijn ongeldig.',
    'This field was not expected.' => 'Dit veld werd niet verwacht.',
    'This field is missing.' => 'Dit veld ontbreekt.',
    'This value is not a valid date.' => 'Deze waarde is geen geldige datum.',
    'This value is not a valid datetime.' => 'Deze waarde is geen geldige datum en tijd.',
    'This value is not a valid email address.' => 'Deze waarde is geen geldig e-mailadres.',
    'The file could not be found.' => 'Het bestand kon niet gevonden worden.',
    'The file is not readable.' => 'Het bestand is niet leesbaar.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Het bestand is te groot ({{ size }} {{ suffix }}). Toegestane maximum grootte is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Het mime type van het bestand is ongeldig ({{ type }}). Toegestane mime types zijn {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Deze waarde moet {{ limit }} of minder zijn.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Deze waarde is te lang. Hij mag maximaal {{ limit }} teken bevatten.|Deze waarde is te lang. Hij mag maximaal {{ limit }} tekens bevatten.',
    'This value should be {{ limit }} or more.' => 'Deze waarde moet {{ limit }} of meer zijn.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Deze waarde is te kort. Hij moet tenminste {{ limit }} teken bevatten.|Deze waarde is te kort. Hij moet tenminste {{ limit }} tekens bevatten.',
    'This value should not be blank.' => 'Deze waarde mag niet leeg zijn.',
    'This value should not be null.' => 'Deze waarde mag niet null zijn.',
    'This value should be null.' => 'Deze waarde moet null zijn.',
    'This value is not valid.' => 'Deze waarde is niet geldig.',
    'This value is not a valid time.' => 'Deze waarde is geen geldige tijd.',
    'This value is not a valid URL.' => 'Deze waarde is geen geldige URL.',
    'The two values should be equal.' => 'De twee waarden moeten gelijk zijn.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Het bestand is te groot. Toegestane maximum grootte is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Het bestand is te groot.',
    'The file could not be uploaded.' => 'Het bestand kon niet worden geüpload.',
    'This value should be a valid number.' => 'Deze waarde moet een geldig getal zijn.',
    'This file is not a valid image.' => 'Dit bestand is geen geldige afbeelding.',
    'This is not a valid IP address.' => 'Dit is geen geldig IP-adres.',
    'This value is not a valid language.' => 'Deze waarde is geen geldige taal.',
    'This value is not a valid locale.' => 'Deze waarde is geen geldige locale.',
    'This value is not a valid country.' => 'Deze waarde is geen geldig land.',
    'This value is already used.' => 'Deze waarde wordt al gebruikt.',
    'The size of the image could not be detected.' => 'De grootte van de afbeelding kon niet bepaald worden.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'De afbeelding is te breed ({{ width }}px). De maximaal toegestane breedte is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'De afbeelding is niet breed genoeg ({{ width }}px). De minimaal verwachte breedte is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'De afbeelding is te hoog ({{ height }}px). De maximaal toegestane hoogte is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'De afbeelding is niet hoog genoeg ({{ height }}px). De minimaal verwachte hoogte is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Deze waarde moet het huidige wachtwoord van de gebruiker zijn.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Deze waarde moet exact {{ limit }} teken lang zijn.|Deze waarde moet exact {{ limit }} tekens lang zijn.',
    'The file was only partially uploaded.' => 'Het bestand is slechts gedeeltelijk geüpload.',
    'No file was uploaded.' => 'Er is geen bestand geüpload.',
    'No temporary folder was configured in php.ini.' => 'Er is geen tijdelijke map geconfigureerd in php.ini, of de gespecificeerde map bestaat niet.',
    'Cannot write temporary file to disk.' => 'Kan het tijdelijke bestand niet wegschrijven op disk.',
    'A PHP extension caused the upload to fail.' => 'De upload is mislukt vanwege een PHP-extensie.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Deze collectie moet {{ limit }} element of meer bevatten.|Deze collectie moet {{ limit }} elementen of meer bevatten.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Deze collectie moet {{ limit }} element of minder bevatten.|Deze collectie moet {{ limit }} elementen of minder bevatten.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Deze collectie moet exact {{ limit }} element bevatten.|Deze collectie moet exact {{ limit }} elementen bevatten.',
    'Invalid card number.' => 'Ongeldig creditcardnummer.',
    'Unsupported card type or invalid card number.' => 'Niet-ondersteund type creditcard of ongeldig nummer.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Dit is geen geldig internationaal bankrekeningnummer (IBAN).',
    'This value is not a valid ISBN-10.' => 'Deze waarde is geen geldige ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Deze waarde is geen geldige ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Deze waarde is geen geldige ISBN-10 of ISBN-13 waarde.',
    'This value is not a valid ISSN.' => 'Deze waarde is geen geldige ISSN waarde.',
    'This value is not a valid currency.' => 'Deze waarde is geen geldige valuta.',
    'This value should be equal to {{ compared_value }}.' => 'Deze waarde moet gelijk zijn aan {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Deze waarde moet groter zijn dan {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Deze waarde moet groter dan of gelijk aan {{ compared_value }} zijn.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Deze waarde moet identiek zijn aan {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Deze waarde moet minder zijn dan {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Deze waarde moet minder dan of gelijk aan {{ compared_value }} zijn.',
    'This value should not be equal to {{ compared_value }}.' => 'Deze waarde mag niet gelijk zijn aan {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Deze waarde mag niet identiek zijn aan {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'De afbeeldingsverhouding is te groot ({{ ratio }}). Maximale verhouding is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'De afbeeldingsverhouding is te klein ({{ ratio }}). Minimale verhouding is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'De afbeelding is vierkant ({{ width }}x{{ height }}px). Vierkante afbeeldingen zijn niet toegestaan.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'De afbeelding is liggend ({{ width }}x{{ height }}px). Liggende afbeeldingen zijn niet toegestaan.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'De afbeelding is staand ({{ width }}x{{ height }}px). Staande afbeeldingen zijn niet toegestaan.',
    'An empty file is not allowed.' => 'Lege bestanden zijn niet toegestaan.',
    'This value does not match the expected {{ charset }} charset.' => 'Deze waarde is niet in de verwachte tekencodering {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'Dit is geen geldige bedrijfsidentificatiecode (BIC/SWIFT).',
    'Error' => 'Fout',
    'This is not a valid UUID.' => 'Dit is geen geldige UUID.',
    'This form should not contain extra fields.' => 'Dit formulier mag geen extra velden bevatten.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Het geüploade bestand is te groot. Probeer een kleiner bestand te uploaden.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'De CSRF-token is ongeldig. Probeer het formulier opnieuw te versturen.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Er heeft zich een authenticatieprobleem voorgedaan.',
    'Authentication credentials could not be found.' => 'Authenticatiegegevens konden niet worden gevonden.',
    'Authentication request could not be processed due to a system problem.' => 'Authenticatieaanvraag kon niet worden verwerkt door een technisch probleem.',
    'Invalid credentials.' => 'Ongeldige inloggegevens.',
    'Cookie has already been used by someone else.' => 'Cookie is al door een ander persoon gebruikt.',
    'Not privileged to request the resource.' => 'Onvoldoende rechten om de aanvraag te verwerken.',
    'Invalid CSRF token.' => 'CSRF-code is ongeldig.',
    'No authentication provider found to support the authentication token.' => 'Geen authenticatieprovider gevonden die de authenticatietoken ondersteunt.',
    'No session available, it either timed out or cookies are not enabled.' => 'Geen sessie beschikbaar, mogelijk is deze verlopen of cookies zijn uitgeschakeld.',
    'No token could be found.' => 'Er kon geen authenticatietoken worden gevonden.',
    'Username could not be found.' => 'Gebruikersnaam kon niet worden gevonden.',
    'Account has expired.' => 'Account is verlopen.',
    'Credentials have expired.' => 'Authenticatiegegevens zijn verlopen.',
    'Account is disabled.' => 'Account is gedeactiveerd.',
    'Account is locked.' => 'Account is geblokkeerd.',
  ),
  'SonataDatagridBundle' => 
  array (
    'link_next_pager' => 'Volgende',
    'link_previous_pager' => 'Vorige',
    'link_first_pager' => 'Eerste',
    'link_last_pager' => 'Laatste',
  ),
  'SonataCoreBundle' => 
  array (
    'link_add' => 'Nieuwe toevoegen',
    'label_type_yes' => 'ja',
    'label_type_no' => 'nee',
    'sonata_core_template_box_file_found_in' => 'Dit bestand is te vinden in',
    'label_type_equals' => 'is gelijk aan',
    'label_type_not_equals' => 'is niet gelijk aan',
    'date_range_start' => 'vanaf datum',
    'date_range_end' => 'tot datum',
    'aliceblue' => 'aliceblue',
    'antiquewhite' => 'antiquewhite',
    'aqua' => 'aqua',
    'aquamarine' => 'aquamarine',
    'azure' => 'azure',
    'beige' => 'beige',
    'bisque' => 'bisque',
    'black' => 'black',
    'blanchedalmond' => 'blanchedalmond',
    'blue' => 'blue',
    'blueviolet' => 'blueviolet',
    'brown' => 'brown',
    'burlywood' => 'burlywood',
    'cadetblue' => 'cadetblue',
    'chartreuse' => 'chartreuse',
    'chocolate' => 'chocolate',
    'coral' => 'coral',
    'cornflowerblue' => 'cornflowerblue',
    'cornsilk' => 'cornsilk',
    'crimson' => 'crimson',
    'cyan' => 'cyan',
    'darkblue' => 'darkblue',
    'darkcyan' => 'darkcyan',
    'darkgoldenrod' => 'darkgoldenrod',
    'darkgray' => 'darkgray',
    'darkgreen' => 'darkgreen',
    'darkkhaki' => 'darkkhaki',
    'darkmagenta' => 'darkmagenta',
    'darkolivegreen' => 'darkolivegreen',
    'darkorange' => 'darkorange',
    'darkorchid' => 'darkorchid',
    'darkred' => 'darkred',
    'darksalmon' => 'darksalmon',
    'darkseagreen' => 'darkseagreen',
    'darkslateblue' => 'darkslateblue',
    'darkslategray' => 'darkslategray',
    'darkturquoise' => 'darkturquoise',
    'darkviolet' => 'darkviolet',
    'deeppink' => 'deeppink',
    'deepskyblue' => 'deepskyblue',
    'dimgray' => 'dimgray',
    'dodgerblue' => 'dodgerblue',
    'firebrick' => 'firebrick',
    'floralwhite' => 'floralwhite',
    'forestgreen' => 'forestgreen',
    'fuchsia' => 'fuchsia',
    'gainsboro' => 'gainsboro',
    'ghostwhite' => 'ghostwhite',
    'gold' => 'gold',
    'goldenrod' => 'goldenrod',
    'gray' => 'gray',
    'green' => 'green',
    'greenyellow' => 'greenyellow',
    'honeydew' => 'honeydew',
    'hotpink' => 'hotpink',
    'indianred' => 'indianred',
    'indigo' => 'indigo',
    'ivory' => 'ivory',
    'khaki' => 'khaki',
    'lavender' => 'lavender',
    'lavenderblush' => 'lavenderblush',
    'lawngreen' => 'lawngreen',
    'lemonchiffon' => 'lemonchiffon',
    'lightblue' => 'lightblue',
    'lightcoral' => 'lightcoral',
    'lightcyan' => 'lightcyan',
    'lightgoldenrodyellow' => 'lightgoldenrodyellow',
    'lightgray' => 'lightgray',
    'lightgreen' => 'lightgreen',
    'lightpink' => 'lightpink',
    'lightsalmon' => 'lightsalmon',
    'lightseagreen' => 'lightseagreen',
    'lightskyblue' => 'lightskyblue',
    'lightslategray' => 'lightslategray',
    'lightsteelblue' => 'lightsteelblue',
    'lightyellow' => 'lightyellow',
    'lime' => 'lime',
    'limegreen' => 'limegreen',
    'linen' => 'linen',
    'magenta' => 'magenta',
    'maroon' => 'maroon',
    'mediumaquamarine' => 'mediumaquamarine',
    'mediumblue' => 'mediumblue',
    'mediumorchid' => 'mediumorchid',
    'mediumpurple' => 'mediumpurple',
    'mediumseagreen' => 'mediumseagreen',
    'mediumslateblue' => 'mediumslateblue',
    'mediumspringgreen' => 'mediumspringgreen',
    'mediumturquoise' => 'mediumturquoise',
    'mediumvioletred' => 'mediumvioletred',
    'midnightblue' => 'midnightblue',
    'mintcream' => 'mintcream',
    'mistyrose' => 'mistyrose',
    'moccasin' => 'moccasin',
    'navajowhite' => 'navajowhite',
    'navy' => 'navy',
    'oldlace' => 'oldlace',
    'olive' => 'olive',
    'olivedrab' => 'olivedrab',
    'orange' => 'orange',
    'orangered' => 'orangered',
    'orchid' => 'orchid',
    'palegoldenrod' => 'palegoldenrod',
    'palegreen' => 'palegreen',
    'paleturquoise' => 'paleturquoise',
    'palevioletred' => 'palevioletred',
    'papayawhip' => 'papayawhip',
    'peachpuff' => 'peachpuff',
    'peru' => 'peru',
    'pink' => 'pink',
    'plum' => 'plum',
    'powderblue' => 'powderblue',
    'purple' => 'purple',
    'rebeccapurple' => 'rebeccapurple',
    'red' => 'red',
    'rosybrown' => 'rosybrown',
    'royalblue' => 'royalblue',
    'saddlebrown' => 'saddlebrown',
    'salmon' => 'salmon',
    'sandybrown' => 'sandybrown',
    'seagreen' => 'seagreen',
    'seashell' => 'seashell',
    'sienna' => 'sienna',
    'silver' => 'silver',
    'skyblue' => 'skyblue',
    'slateblue' => 'slateblue',
    'slategray' => 'slategray',
    'snow' => 'snow',
    'springgreen' => 'springgreen',
    'steelblue' => 'steelblue',
    'tan' => 'tan',
    'teal' => 'teal',
    'thistle' => 'thistle',
    'tomato' => 'tomato',
    'turquoise' => 'turquoise',
    'violet' => 'violet',
    'wheat' => 'wheat',
    'white' => 'white',
    'whitesmoke' => 'whitesmoke',
    'yellow' => 'yellow',
    'yellowgreen' => 'yellowgreen',
  ),
  'SonataAdminBundle' => 
  array (
    'sonata_administration' => 'Administratie',
    'action_delete' => 'Verwijderen',
    'btn_batch' => 'OK',
    'btn_create' => 'Aanmaken',
    'btn_create_and_edit_again' => 'Aanmaken',
    'btn_create_and_create_a_new_one' => 'Aanmaken en nieuwe toevoegen',
    'btn_create_and_return_to_list' => 'Aanmaken en terug naar de lijst',
    'btn_filter' => 'Filter',
    'btn_advanced_filters' => 'Geavanceerde filters',
    'btn_update' => 'Bijwerken',
    'btn_update_and_edit_again' => 'Bijwerken',
    'btn_update_and_return_to_list' => 'Bijwerken en sluiten',
    'link_delete' => 'Verwijderen',
    'link_action_create' => 'Nieuwe toevoegen',
    'link_action_list' => 'Terug naar lijst',
    'link_action_show' => 'Tonen',
    'link_action_edit' => 'Bijwerken',
    'link_add' => 'Nieuwe toevoegen',
    'link_edit' => 'Bewerken',
    'link_list' => 'Lijst',
    'link_reset_filter' => 'Herstellen',
    'title_create' => 'Aanmaken',
    'title_show' => 'Tonen "%name%"',
    'title_dashboard' => 'Dashboard',
    'title_edit' => 'Wijzig "%name%"',
    'title_list' => 'Lijst',
    'link_next_pager' => 'Volgende',
    'link_previous_pager' => 'Vorige',
    'link_first_pager' => 'Eerste',
    'link_last_pager' => 'Laatste',
    'Admin' => 'Beheer',
    'link_expand' => 'Uitklappen/inklappen',
    'no_result' => 'Geen resultaten',
    'confirm_msg' => 'Weet je het zeker?',
    'action_edit' => 'Bijwerken',
    'action_show' => 'Tonen',
    'all_elements' => 'Alle items',
    'flash_batch_empty' => 'Handeling gestopt. Geen items geselecteerd.',
    'flash_create_success' => 'Het item is succesvol aangemaakt.',
    'flash_create_error' => 'Het item kon door een fout niet worden aangemaakt.',
    'flash_edit_success' => 'Het item is succesvol bijgewerkt.',
    'flash_edit_error' => 'Het item kon door een fout niet worden bijgewerkt.',
    'flash_lock_error' => 'Een andere gebruiker heeft item "%name%" bewerkt. %link_start%Klik hier%link_end% om de pagina te herladen en de wijzigingen opnieuw toe te passen.',
    'flash_batch_delete_success' => 'De geselecteerde items zijn succesvol verwijderd.',
    'flash_batch_delete_error' => 'De geselecteerde items konden door een fout niet worden verwijderd.',
    'flash_delete_error' => 'Het item kon door een fout niet worden verwijderd.',
    'flash_delete_success' => 'Het item is succesvol verwijderd.',
    'form_not_available' => 'Form is niet beschikbaar',
    'link_breadcrumb_dashboard' => '<i class="fa fa-home"></i>',
    'title_delete' => 'Bevestig verwijdering',
    'message_delete_confirmation' => 'Weet je zeker dat het geselecteerde item moet worden verwijderd?',
    'btn_delete' => 'Ja, verwijder',
    'title_batch_confirmation' => 'Bevestig groep handeling',
    'message_batch_confirmation' => 'Weet je zeker dat de handeling moet worden uitgevoerd voor het geselecteerde item?|Weet je zeker dat voor de %count% geselecteerde items de handeling moet worden uitgevoerd?',
    'message_batch_all_confirmation' => 'Weet je zeker dat voor alle items de handeling moet worden uitgevoerd?',
    'btn_execute_batch_action' => 'Ja, voer uit',
    'label_type_yes' => 'ja',
    'label_type_no' => 'nee',
    'label_type_contains' => 'bevat',
    'label_type_not_contains' => 'bevat niet',
    'label_type_equals' => 'is gelijk aan',
    'label_type_not_equals' => 'is niet gelijk aan',
    'label_type_equal' => '=',
    'label_type_greater_equal' => '>=',
    'label_type_greater_than' => '>',
    'label_type_less_equal' => '<=',
    'label_type_less_than' => '<',
    'label_date_type_equal' => '=',
    'label_date_type_greater_equal' => '>=',
    'label_date_type_greater_than' => '>',
    'label_date_type_less_equal' => '<=',
    'label_date_type_less_than' => '<',
    'label_date_type_null' => 'is leeg',
    'label_date_type_not_null' => 'is niet leeg',
    'label_date_type_between' => 'tussen',
    'label_date_type_not_between' => 'niet tussen',
    'label_filters' => 'Filters',
    'delete_or' => 'of',
    'link_action_history' => 'Revisies',
    'td_action' => 'Handeling',
    'td_compare' => 'Vergelijk',
    'td_revision' => 'Revisies',
    'td_timestamp' => 'Datum',
    'td_username' => 'Auteur',
    'td_role' => 'Rol',
    'label_view_revision' => 'Toon revisie',
    'label_compare_revision' => 'Vergelijk revisie',
    'list_results_count_prefix' => 'minstens',
    'list_results_count' => '1 resultaat|%count% resultaten',
    'label_export_download' => 'Download',
    'export_format_json' => 'JSON',
    'export_format_xml' => 'XML',
    'export_format_csv' => 'CSV',
    'export_format_xls' => 'XLS',
    'loading_information' => 'Laden van informatie...',
    'btn_preview' => 'Voorvertoning',
    'btn_preview_approve' => 'Goedkeuren',
    'btn_preview_decline' => 'Afkeuren',
    'label_per_page' => 'Aantal per pagina',
    'list_select' => 'Selecteer',
    'confirm_exit' => 'Je hebt niet opgeslagen wijzigingen!',
    'link_edit_acl' => 'Bewerk ACL',
    'btn_update_acl' => 'Update ACL',
    'flash_acl_edit_success' => 'ACL aangepast',
    'link_action_acl' => 'ACL',
    'short_object_description_placeholder' => 'Geen selectie',
    'title_search_results' => 'Zoek resultaten',
    'search_placeholder' => 'Zoeken',
    'no_results_found' => 'Geen resultaten gevonden',
    'add_new_entry' => 'Nieuw item toevoegen',
    'link_actions' => 'Acties',
    'noscript_warning' => 'Javascript is uitgeschakeld in uw browser. Sommige functies zullen niet goed werken.',
    'message_form_group_empty' => 'Geen velden beschikbaar.',
    'link_filters' => 'Filters',
    'stats_view_more' => 'Bekijk meer',
    'title_select_subclass' => 'Selecteer object type',
    'no_subclass_available' => 'Geen object types beschikbaar',
    'label_unknown_user' => 'onbekend',
    'read_more' => 'Lees verder',
    'read_less' => 'Lees minder',
  ),
));
$catalogue->addFallbackCatalogue($catalogueNl);

return $catalogue;