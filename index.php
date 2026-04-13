<?php
$bestandsnaam = "gewerkte_uren.csv";

printf("\n\n--- Urenregistratie Systeem ---\n");
printf("Vul de volgende gegevens in (of druk op Ctrl+C om te stoppen):\n\n");

$datum      = readline("Datum (bijv. 24-03-2026): ");
$project    = readline("Project naam: ");
$uren       = readline("Aantal gewerkte uren: ");
$omschrijving = readline("Korte omschrijving werkzaamheden: ");

$data = [
    'datum'        => $datum,
    'project'      => $project,
    'uren'         => $uren,
    'omschrijving' => $omschrijving,
];

$file = fopen($bestandsnaam, "a");

if (fputcsv($file, $data)) {
    printf("\nDe uren zijn opgeslagen in %s.\n", $bestandsnaam);
} else {
    printf("\nEr is een fout opgetreden bij het opslaan.\n");
}

fclose($file);
?>