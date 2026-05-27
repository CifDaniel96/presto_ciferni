# Presto.it

Presto.it è una piattaforma di annunci online sviluppata come progetto finale del corso **Hackademy On Demand - Aulab**.

Il progetto permette agli utenti di registrarsi, pubblicare annunci, caricare immagini, cercare articoli e navigare il sito in più lingue.  
Gli annunci non vengono pubblicati immediatamente: passano prima da una dashboard revisore, dove possono essere accettati o rifiutati.

---

## Funzionalità principali

- Registrazione, login e logout utenti
- Creazione annunci tramite componente Livewire
- Validazione dei dati del form
- Relazioni tra utenti, articoli, categorie e immagini
- Visualizzazione homepage con ultimi articoli accettati
- Pagina con tutti gli articoli
- Pagina dettaglio articolo
- Filtro articoli per categoria
- Sistema di revisione articoli
- Ruolo revisore protetto da middleware
- Richiesta per diventare revisore
- Accettazione e rifiuto articoli
- Upload multiplo immagini
- Preview immagini prima del salvataggio
- Rimozione singola immagine prima del submit
- Salvataggio immagini tramite Laravel File Storage
- Crop automatico immagini tramite job asincrono
- Analisi immagini tramite Google Vision API
- Safe Search Detection
- Label Detection
- Censura automatica dei volti
- Watermark Presto.it sulle immagini
- Ricerca full-text tramite Laravel Scout e TNTSearch
- Multilingua con italiano, inglese e spagnolo
- UI realizzata con Bootstrap

---

## Tecnologie utilizzate

- PHP 8.4
- Laravel
- Laravel Fortify
- Laravel Livewire
- MySQL
- Laravel File Storage
- Laravel Queue / Jobs
- Google Vision API
- Spatie Image
- Laravel Scout
- TNTSearch
- Bootstrap
- Bootstrap Icons
- Blade
- Vite
- Git / GitHub

---

## Struttura principale del progetto

Le entità principali del progetto sono:

- `User`
- `Article`
- `Category`
- `Image`

## Le relazioni principali sono:


- User 1-N Article
- Category 1-N Article
- Article 1-N Image