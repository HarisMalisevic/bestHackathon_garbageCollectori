# O našoj aplikaciji

## Ciljevi

### Motivisanje promjene u ponašanju
* Manje CO₂ emisije kroz tokenizaciju ekološki odgovornog ponašanja
* Motivacija za odabir održivih alternativa za svakodnevne aktivnosti

### Skalabilnost i primjenjivost
* Rješenje primjenjivo u mnogim sektorima i oblastima
* Jednostavno i pravovremeno nagrađivanje odgovornog ponašanja

## Rješenje

### Nagrade za odgovornost
* Biranje ekološki osviještenih aktivnosti i alternativa se nagrađuje tokenima

### Kumulativni efekt
* Malim pojedinačnim doprinosima jedna zajednica pravi veliki kumulativni učinak u svojoj okolini

### Vrijednost tokena
* Partnerske kompanije, vladine i nevladine institucije nude popuste, benefite i nagrade u zamjenu za tokene

### Leaderboard
* Prijatelji i organizacije se mogu rangirati i takmičiti u svojim rezultatima

### Uvid u rezultate
* Pojedinci mogu da jasno vide pozitivan učinak koji imaju svojim aktivnostima i odlukama

## Biznis prilike

### Za partnerske kompanije
* **Pristup novim klijentima** – Povežite se s ciljanim korisnicima i proširite svoju bazu kupaca kroz personalizovane ponude i automatizaciju prodajnih procesa.

* **Marketing prilike** – Iskoristite analitiku i ciljanje kako biste poboljšali vidljivost brenda i efikasnost promotivnih kampanja.

* **Usluge izvještavanja** – Donosite informisane odluke uz detaljne izvještaje o finansijama, tržištu i ponašanju kupaca.

* **Isticanje na tržištu** – Koristite inovativna rješenja kako biste poboljšali konkurentsku prednost i učvrstili svoj imidž lidera.

* **Zelen javni imidž** – Unaprijedite održivost poslovanja kroz optimizaciju resursa i ekološki prihvatljive prakse.

### Za gradove i opštine
* **Angažman građana u ekološkim aktivnostima** – Povećajte svijest i učešće građana kroz digitalne alate i interaktivne kampanje.

* **Usluge izvještavanja** – Pristupite preciznim podacima i analizama koji olakšavaju donošenje odluka i praćenje ekoloških ciljeva.

* **Motivacija za reciklažu** – Uvedite podsticaje i programe koji građane motivišu na odgovorno upravljanje otpadom.

* **Smanjena potrošnja energije** – Optimizujte potrošnju resursa kroz pametna rješenja i održive strategije.

* **Privlačenje investicija i fondova** – Povećajte ekonomske mogućnosti kroz projekte koji ispunjavaju ekološke standarde i privlače eksterne izvore finansiranja.

### Naša prilika
* **Marketing ekološki osviještenih brendova** – Pružamo prostor za promociju brendova koji podržavaju održivost, povezujući ih s ekološki osviještenim potrošačima.

* **Integracija sa javnim uslugama** – Omogućavamo lokalnim vlastima efikasniju implementaciju ekoloških inicijativa uz napredne digitalne alate.

* **Partnerstva sa trgovinama** – Saradnja s maloprodajnim lancima omogućava kreiranje programa lojalnosti i nagrađivanja kupaca za ekološki odgovorno ponašanje.

* **Subvencije i grantovi** – Kroz projekte u oblasti održivosti i zaštite okoliša, otvaramo mogućnosti za finansiranje iz javnih i privatnih izvora.

## Naredni koraci

### Povratne informacije
Vaša mišljenja su ključna u daljem razvoju sistema i prilagođavanju potrebama tržišta!

### Dalji razvoj
Trenutni MVP je tek prvi korak u procesu razvoja stvarnog sistema. Da bi sistem opstao u dinamičnom tržištu, potrebno je raditi na njegovom razvoju!

### Finansiranje i podrška
Dalji razvoj nije moguć bez finansiranja i podrške od zainteresiranih strana te je ovo prvi i možda najbitniji korak

# Laravel Project Setup Guide

## Preduslovi

* PHP (8.4)
* Composer
* [MySQL baza podataka](https://www.apachefriends.org/download.html)
* [Node.js i npm](https://nodejs.org/en/download)
* [Laravel](https://laravel.com/docs/11.x/installation)

### Laravel i Composer install:

#### MacOS
```
/bin/bash -c "$(curl -fsSL https://php.new/install/mac/8.4)"
```
#### Windows
```
# Run as administrator...
Set-ExecutionPolicy Bypass -Scope Process -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor 3072; iex ((New-Object System.Net.WebClient).DownloadString('https://php.new/install/windows/8.4'))
```
#### Linux
```
/bin/bash -c "$(curl -fsSL https://php.new/install/linux/8.4)"
```

## Koraci za pokretanje

### 1. Klonirati repozitorij
```
git clone https://github.com/MMahmutovicc/bestHackathon_garbageCollectori

cd <direktorij-projekta>
```

### 2. Instalirati zavisnosti
```
composer install
npm install
```

### 3. Generisati app key
```
php artisan key:generate
```

### 4. Environment config
```
cp .env.example .env
```

### 5. Migracija baze podataka
```
php artisan migrate
php artisan db:seed --class=UserSeeder
php artisan db:seed --class=PartnerSeeder
php artisan db:seed --class=CompanySeeder
php artisan db:seed --class=OfferSeeder
php artisan db:seed --class=RefferalCodeSeeder
php artisan db:seed --class=ConnectionSeeder
```

#### Očekivana konfiguracija baze je:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=besthackathon_garbagecollectori
DB_USERNAME=root
DB_PASSWORD=
```

Ukoliko ne postoji baza sa nazivom ```besthackathon_garbagecollectori``` na MySQL konekciji biti će ponuđeno pitanje
```Would you like to create it? (yes/no)```.
Upisati ```yes``` za kreiranje baze.

### 6. Dodavanje admin računa
Ukoliko želite kreirati admin račun, pokrenuti:
```
php artisan admin:add
```
i pratiti dalje korake u terminalu.


### 7. Pokretanje aplikacije
```
php artisan serve
```

Aplikacija će biti dostupna na adresi: ```http://127.0.0.1:8000```.
