# degordian
Test project
Opis zadatka:

Napraviti plugin koji će kreirati API rutu za izlistavanje blog postova sa sledećim specifikacijama:

Ruta treba da bude BASE_URL/wp-json/v1/posts, da koristi GET metodu i da vraća validan JSON

API na defaultnoj ruti treba da izlista poslednjih 10 blog postova, informaciju o tome da li postoji sledeća stranica, kao i ukupan broj stranica rezultata

API treba da ima mogućnost promene broja izlistanih blog postova po stranici, kao i promene tražene stranice (npr. BASE_URL/wp-json/v1/posts?per_page=5&page=3)

Post objekat koji API vraća treba da poseduje sledeće informacije: ID, title, excerpt, content, created_at

U slučaju da API dobije GET parametar ‘include=categories’, svaki blog post pored gore navedenih informacija treba da sadrži i listu svih kategorija kojima pripada

API treba da ima mogućnost filtriranja rezultata po nazivu kategorije putem GET parametra (npr. category='Base Category') 

API treba da ima mogućnost sortiranja rezultata po title-u i datumu kreiranja putem GET parametara (npr. order_by=title&order=ASC, order_by=date&order=DESC)

Bonus poeni: Izrada teme (front-end izgled nije bitan) koja ce pozivati tvoje API rute i izlistavati filtrirane blog postove. 

Ocenjuje se: Prevashodno cenimo pismenost, strukturu i jasnoću koda, kao i poznavanje WordPress funkcionalnosti. Kod treba da bude razumljiv i jednostavan. 

Ukoliko ne stigneš iz bilo kog razloga da uradiš zadatak do kraja, pošalji nam kod koji imaš, pogledaćemo ga svakako i dati ti feedback. 

Format u kojem je potrebno poslati rešenje: Zadatak nam pošalji u .zip fajlu. Možeš nam poslati samo plugin, ili ceo Wordpress projekat sa bazom. Kod možeš komentarisati ili nam poslati kratak opis uz zadatak.

Rok za slanje rešenja: srijeda, 27.7.2022. do kraja dana 

*************************************************************************************************************  
230722  : Install Query Monitor plugin  
        : Install Show Current Template 0.4.6 plugin  
        : Set primary nav  
        : RouteAPI plugin development start  

210722  : Install GeneratePress  
        : Install child theme  
        
