<?php 
/*
1. Vytvor jeden PHP súbor, ktorý zobrazí registračný formulár s poľami meno, email, heslo a potvrdenie hesla.
   Po odoslaní formulára skontroluj, či sú všetky polia vyplnené a či sa heslá zhodujú.
   Ak nastane chyba, vypíš konkrétnu chybovú hlášku.

2. Vytvor formulár na výpočet ceny objednávky.
   Používateľ zadá názov produktu, počet kusov a cenu za kus.
   Po odoslaní formulára vypočítaj celkovú cenu.
   Ak počet kusov alebo cena nie sú kladné čísla, vypíš chybu.

3. Vytvor formulár s metódou GET na filtrovanie produktov.
   Používateľ zadá kategóriu produktu a maximálnu cenu.
   Po odoslaní vypíš text v tvare:
   „Zobrazujem produkty z kategórie X do ceny Y €.“
   Zabezpeč, aby sa údaje získavali cez $_GET.

4. Vytvor formulár, v ktorom používateľ vyberie typ dopravy pomocou selectu a spôsob platby pomocou radio buttonov.
   Po odoslaní vypíš súhrn objednávky.
   Ak používateľ nevyberie spôsob platby, vypíš chybovú hlášku.

5. Vytvor formulár, ktorý obsahuje checkboxy na výber viacerých záujmov používateľa.
   Používateľ môže označiť napríklad šport, hudbu, programovanie, cestovanie.
   Po odoslaní vypíš všetky vybrané záujmy.
   Ak nevyberie ani jeden, vypíš upozornenie.

6. Vytvor jeden PHP súbor, ktorý dokáže spracovať formulár odoslaný metódou GET aj POST.
   Pomocou $_SERVER["REQUEST_METHOD"] zisti, akou metódou bol formulár odoslaný.
   Podľa použitej metódy vypíš, či boli údaje prijaté cez GET alebo POST.

7. Vytvor formulár na zadanie osobných údajov: meno, vek, email a mesto.
   Po odoslaní vykonaj validáciu:
   - meno musí mať aspoň 3 znaky,
   - vek musí byť číslo od 15 do 100,
   - email musí mať správny formát,
   - mesto nesmie byť prázdne.
   Všetky chyby ukladaj do poľa a následne ich vypíš naraz.

8. Vytvor jednoduchý dotazník s použitím prvkov input, textarea, select, radio a checkbox.
   Po odoslaní zobraz prehľadnú rekapituláciu všetkých odpovedí.
   Pri výpise použi htmlspecialchars(), aby bol výstup bezpečný.

9. Vytvor formulár na vyhľadávanie článkov.
    Formulár odošli metódou GET.
    Používateľ zadá hľadaný výraz a vyberie kategóriu článku.
    Po odoslaní vytvor a vypíš text:
    „Vyhľadávam výraz '...' v kategórii '...'.“
    Ak nie je zadaný hľadaný výraz, vypíš chybu.
    V riešení použi $_GET a zároveň ošetri výstup pomocou htmlspecialchars().

10. Vytvor formulár na výpočet BMI.
    Používateľ zadá svoju hmotnosť v kilogramoch a výšku v centimetroch.
    Po odoslaní vypočítaj BMI podľa vzorca:
    BMI = hmotnosť / výška²
    Výšku prepočítaj na metre.
    Ak hmotnosť alebo výška nie sú kladné čísla, vypíš chybu.

11. Vytvor formulár s checkboxmi na výber programovacích jazykov.
    Používateľ môže vybrať PHP, Python, JavaScript, Java, C#.
    Po odoslaní vypíš všetky vybrané jazyky.
    Ak nevyberie žiadny jazyk, vypíš upozornenie.

12. Zapamätanie mena používateľa cez COOKIE
    Vytvor formulár, kde používateľ zadá svoje meno.
    Po odoslaní ulož meno do cookie.
    Pri ďalšej návšteve stránky vypíš:
    „Vitaj späť, X.“
    Pridaj aj tlačidlo „Zabudnúť meno“, ktoré cookie vymaže.
13. Výber témy stránky cez COOKIE
    Vytvor stránku, kde si používateľ vyberie vzhľad stránky:
    - svetlá téma,
    - tmavá téma.
    Výber ulož do cookie.
    Pri ďalšej návšteve sa má automaticky použiť posledná zvolená téma.
    Podľa hodnoty cookie zmeň farbu pozadia a textu stránky.
*/
?>