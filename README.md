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
*************************************************************************************************************  
Routes in the REST API are represented by URIs. The route itself is what is tacked onto the end of https://ourawesomesite.com/wp-json. The index route for the API is ‘/’, which is why https://ourawesomesite.com/wp-json/` returns all of the available information for the API. All routes should be built onto this route, the wp-json portion can be changed, but in general, it is advised to keep it the same.

We want to make sure that our routes are unique. For instance, we could have a route for books like this: /books. Our books route would now live at https://ourawesomesite.com/wp-json/books. However, this is not a good practice as we would end up polluting potential routes for the API. What if another plugin we wanted to register a books route as well? We would be in big trouble in that case, as the two routes would conflict with each other and only one could be used. The fourth parameter to register_rest_route()` is a boolean for whether the route should override an existing route. The override parameter does not really solve our problem either, as both routes could override or we would want to use both routes for different things. This is where using namespaces for our routes comes in.
*************************************************************************************************************  
The REST API provides us a way to match URIs to various resources in our WordPress install. By default, if we have pretty permalinks enabled, the WordPress REST API “lives” at /wp-json/.
*************************************************************************************************************  
Endpoints are functions available through the API. Endpoints perform a specific function, taking some number of parameters and return data to the client.  
*************************************************************************************************************  
If we wanted to create an endpoint that would return the phrase “Hello World, this is the WordPress REST API” when it receives a GET request, we would first need to register the route for that endpoint. To register routes, we should use the register_rest_route() function. It needs to be called on the rest_api_init action hook. register_rest_route() handles all of the mapping for routes to endpoints.
*************************************************************************************************************  
*************************************************************************************************************  
*************************************************************************************************************  
230722  : Install Query Monitor plugin  
        : Install Show Current Template 0.4.6 plugin  
        : Set primary nav  
        : RouteAPI plugin development start  
        : Set route v1/posts  
        
210722  : Install GeneratePress  
        : Install child theme  
        
