<?php

/*
1. Vytvor jeden PHP súbor, ktorý zobrazí registračný formulár s poľami meno, email, heslo a potvrdenie hesla.
   Po odoslaní formulára skontroluj, či sú všetky polia vyplnené a či sa heslá zhodujú.
   Ak nastane chyba, vypíš konkrétnu chybovú hlášku.)

2. Vytvor formulár na výpočet ceny objednávky.
   Používateľ zadá názov produktu, počet kusov a cenu za kus.
   Po odoslaní formulára vypočítaj celkovú cenu.
   Ak počet kusov alebo cena nie sú kladné čísla, vypíš chybu.

3. Vytvor jeden PHP súbor, ktorý dokáže spracovať formulár odoslaný metódou GET aj POST.
   Pomocou $_SERVER["REQUEST_METHOD"] zisti, akou metódou bol formulár odoslaný.
   Podľa použitej metódy vypíš, či boli údaje prijaté cez GET alebo POST.

4. Vytvor formulár na zadanie osobných údajov: meno, vek, email a mesto.
   Po odoslaní vykonaj validáciu:
   - meno musí mať aspoň 3 znaky,
   - vek musí byť číslo od 15 do 100,
   - email musí mať správny formát,
   - mesto nesmie byť prázdne.
   Všetky chyby ukladaj do poľa a následne ich vypíš naraz.

5. Vytvor formulár na výpočet BMI.
    Používateľ zadá svoju hmotnosť v kilogramoch a výšku v centimetroch.
    Po odoslaní vypočítaj BMI podľa vzorca:
    BMI = hmotnosť / výška²
    Výšku prepočítaj na metre.
    Ak hmotnosť alebo výška nie sú kladné čísla, vypíš chybu.

6. Výber témy stránky cez COOKIE
    Vytvor stránku, kde si používateľ vyberie vzhľad stránky:
    - svetlá téma,
    - tmavá téma.
    Výber ulož do cookie.
    Pri ďalšej návšteve sa má automaticky použiť posledná zvolená téma.
    Podľa hodnoty cookie zmeň farbu pozadia a textu stránky.

7.  Pripojenie k databáze pomocou MySQLi
    Vytvor kód, ktorý sa pripojí k databáze pomocou mysqli.
    Nastav host, používateľa, heslo a názov databázy.
    Ak sa pripojenie nepodarí, vypíš chybovú hlášku.

8.  Výpis všetkých používateľov z databázy
    Vytvor stránku, ktorá vypíše všetkých používateľov z tabuľky users.
    Zobraz ich v HTML tabuľke so stĺpcami: ID, meno,email, dátum registrácie.
*/