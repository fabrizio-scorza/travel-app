# Travel Planner

## Descrizione
Travel Planner è un applicazione web per la pianificazione e gestione dei viaggi. Permette di documentare le tappe del viaggio, visualizzarle su mappa, aggiungere note e valutazioni, mantenendo la traccia dei progressi anche dopo la chiusura della pagina.

## Feature
- Creazione di nuovi viaggi
- Aggiunta di tappe giornaliere con i dettagli relativi
- Visualizzazione delle tappe sulla mappa interattiva
- Modifica e cancellazione delle tappe
- Tracciamento derlla progressione delle tappe

## Requisiti
- [MAMP](https://www.mamp.info/en/downloads/) (per gestire il server web, PHP e il database MySQL)
- PHP (versione 8.1 o superiore)
- Composer (versione 2.2 o superiore)
- Node.js (versione 20 o superiore)
- npm (versione 10 o superiore)

## Installazione
1. Clona la repository
2. Accedi alla directory del progetto
3. Installa le dipendenze PHP
    - composer install
4. Installa le dipendenze JavaScript
    - npm install
5. Crea un file .env copiando quello di esempio e configurando le variabili di ambiente necessarie:
    - cp .env.example .env
6. Genera la chiave dell'applicazione Laravel
    - php artisan key:generate
7. Configura MAMP
    - Assicurati che MAMP sia in esecuzione.
    - Configura il database in MAMP e aggiorna le variabili di ambiente nel file .env per connettersi al database MySQL.

## Utilizzo
1. Avvia il server di sviluppo Laravel
    - php artisan serve
2. In altra console avvia Vite
    - npm run dev
3. Apri il browser e visita `http//localhost:8000` per vedere l'app in esecuzione

## Struttura del Progetto
- app/: Contiene il codice backend di Laravel.
- resources/: Contiene le risorse frontend, inclusi i componenti Vue e i file di stile.
- public/: Directory pubblica per l'output degli asset e il punto di ingresso dell'app.
- routes/: Definisce le rotte dell'applicazione.
- package.json: File di configurazione npm.
- composer.json: File di configurazione Composer.
