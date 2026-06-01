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

4. Vytvor formulár s metódou POST, ktorý bude obsahovať meno, email, predmet správy a text správy.
   Po odoslaní skontroluj:
   - či sú všetky polia vyplnené,
   - či má email správny formát,
   - či má správa aspoň 20 znakov.
   Ak je všetko správne, vypíš potvrdenie o odoslaní.

5. Vytvor formulár, v ktorom používateľ vyberie typ dopravy pomocou selectu a spôsob platby pomocou radio buttonov.
   Po odoslaní vypíš súhrn objednávky.
   Ak používateľ nevyberie spôsob platby, vypíš chybovú hlášku.

6. Vytvor formulár, ktorý obsahuje checkboxy na výber viacerých záujmov používateľa.
   Používateľ môže označiť napríklad šport, hudbu, programovanie, cestovanie.
   Po odoslaní vypíš všetky vybrané záujmy.
   Ak nevyberie ani jeden, vypíš upozornenie.

7. Vytvor jeden PHP súbor, ktorý dokáže spracovať formulár odoslaný metódou GET aj POST.
   Pomocou $_SERVER["REQUEST_METHOD"] zisti, akou metódou bol formulár odoslaný.
   Podľa použitej metódy vypíš, či boli údaje prijaté cez GET alebo POST.

8. Vytvor formulár na zadanie osobných údajov: meno, vek, email a mesto.
   Po odoslaní vykonaj validáciu:
   - meno musí mať aspoň 3 znaky,
   - vek musí byť číslo od 15 do 100,
   - email musí mať správny formát,
   - mesto nesmie byť prázdne.
   Všetky chyby ukladaj do poľa a následne ich vypíš naraz.

9. Vytvor jednoduchý dotazník s použitím prvkov input, textarea, select, radio a checkbox.
   Po odoslaní zobraz prehľadnú rekapituláciu všetkých odpovedí.
   Pri výpise použi htmlspecialchars(), aby bol výstup bezpečný.

10. Vytvor formulár na vyhľadávanie článkov.
    Formulár odošli metódou GET.
    Používateľ zadá hľadaný výraz a vyberie kategóriu článku.
    Po odoslaní vytvor a vypíš text:
    „Vyhľadávam výraz '...' v kategórii '...'.“
    Ak nie je zadaný hľadaný výraz, vypíš chybu.
    V riešení použi $_GET a zároveň ošetri výstup pomocou htmlspecialchars().
*/
?>