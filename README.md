### Autorid: Mihkel Hain, Erik Vilumaa, Henri Jervson

Projekti esmaseks käivitamiseks peale repo kloonimist:
```
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs
```
# Koolitööde Haldussüsteem

Võimaldab märkida kalendrisse tähtaegu, mis on seotud õppeainega ja lisada nende kohta vajalikku infot (eeldatav ajakulu, ülesande maht, õppematerjalid, jne). 

## Ülesanne 1. XML
Luua XML fail vabalt valitud andmete edastamiseks, selle faili skeemifail ning XSL fail(id) erinevate transformatsioonide tarvis (soovitavalt vähemalt andmete HTML ja XML kujul kuvamiseks)

XML fail peab sisaldama broneering, klient, protseduur, teenindaja, aeg, võib lisada oma omadus. 

XML-il peab olema 2 või 3 loogilist dimensiooni.
```
<dim1>
  <dim2>
    <dim3>
    </dim3>
  </dim2>
</dim1>
```
Kuvada andmed HTML tabelina kasutades XSLT ja PHP failis erinevaid funktsioone (näiteks, otsida broneeringuid kliendi järgi). 
Välja mõelda vähemalt 3 funktsiooni.
 
## Ülesanne 2. Veebiteenus ja klientrakendus.

Rakenduses on olemas järgmised võimalused: 

Rakendus võimaldab kasutajal veebirakendusse sisse logida, kasutades e-posti ja parooli. 

Andmebaasis hoitakse Ülesanded(tähtaeg, õppeaine, tööliik, ülesanne), kasutajate paroole/emaile (adminid).

Veebiteenus võimaldab suhelda veebirakenduse ja andmebaasi vahel, tagastada ja muuta informatsiooni märkimise ja kasutajaandmete kohta. 

Rakenduse kasutamiseks on kohustuslik konto loomine. Anonüümset kasutust ei ole. 

Ülesannete haldus: 

*	Kasutaja peab saama lisada uue Ülesande;
*	Kasutaja peab saama vaadata oma Ülesande sisu.
*	Kasutaja peab saama muuta oma Ülesande sisu.
*	Kasutaja peab saama oma Ülesandeid kustutada.
*	Kasutaja peab saama Ülesannet märksõna alusel otsida (Seejuures peab otsing hõlmama kõiki Ülesandega seotud teksti välju (st pealkiri, kirjeldus, kommentaar, töö liik, õppeaine, staatus)


## Ülesanne 3. Projekti dokumentatsioon.
Kasutajalood (PivotalTrackeris vms. keskkonnas) koos vastuvõtu tingimustega.

Lähtekood versioonihalduses, tähenduslikud koodikinnitused ja seotud kasutajalugudega.

Projekti loomise etapid koos vastavate kirjelduste ja piltidega.

Kasutajajuhend iga rolli jaoks.

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
