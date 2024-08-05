# Requisiti del progetto Travel Planner

## Requisiti funzionali

### Gestione dei viaggi
- Creare un nuovo viaggio.
- Visualizzare un elenco di viaggi creati.
- Modificare un viaggio esistente.
- Eliminare un viaggio.

### Gestione delle tappe giornaliere
- Aggiungere una nuova tappa giornaliera a un viaggio.
- Visualizzare le tappe giornaliere di un viaggio.
- Modificare una tappa esistente.
- Eliminare una tappa.

### Dettagli delle tappe
- Inserire dettagli come titolo, descrizione, data, immagini, cibo, curiosità.
- Aggiungere note personali a una tappa.
- Inserire una valutazione (es. da 1 a 5 stelle) su una tappa.

### Visualizzazione su mappa
- Visualizzare le tappe di un viaggio su una mappa interattiva.
- Mostrare informazioni di dettaglio al click su una tappa sulla mappa.

### Tracciamento della progressione
- Tenere traccia della progressione delle tappe anche quando la pagina viene chiusa (utilizzando LocalStorage o un backend).

## Requisiti non funzionali

### Usabilità
- L'interfaccia utente deve essere intuitiva e facile da usare.
- L'app deve essere responsive e funzionare su diversi dispositivi (desktop, tablet, mobile).

### Prestazioni
- L'app deve caricarsi velocemente e rispondere rapidamente alle interazioni dell'utente.
- La mappa interattiva deve essere fluida e reattiva.

### Compatibilità
- L'app deve essere compatibile con i principali browser (Chrome, Firefox, Safari, Edge).

### Sicurezza
- I dati degli utenti devono essere protetti e gestiti in modo sicuro.
- Se viene utilizzato un backend, implementare l'autenticazione e l'autorizzazione per proteggere i dati degli utenti.

### Manutenibilità
- Il codice deve essere ben organizzato e documentato per facilitare la manutenzione e l'aggiornamento futuro.
- Utilizzare best practice di sviluppo software

### Persistenza dei dati
- I dati devono essere salvati e recuperati in modo affidabile, anche dopo la chiusura e riapertura della pagina.