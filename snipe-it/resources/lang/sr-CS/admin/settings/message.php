<?php

return [

    'update' => [
        'error'                 => 'Došlo je do pogreške prilikom ažuriranja. ',
        'success'               => 'Postavke su uspešno ažurirane.',
    ],
    'backup' => [
        'delete_confirm'        => 'Jeste li sigurni da želite izbrisati tu backup datoteku? Ova se akcija ne može poništiti. ',
        'file_deleted'          => 'Sigurnosna kopija datoteke je uspešno izbrisana. ',
        'generated'             => 'Nova sigurnosna kopija datoteke uspešno je kreirana.',
        'file_not_found'        => 'Sigurnosna kopija datoteke nije na serveru.',
        'restore_warning'       => 'Yes, restore it. I acknowledge that this will overwrite any existing data currently in the database. This will also log out all of your existing users (including you).',
        'restore_confirm'       => 'Are you sure you wish to restore your database from :filename?'
    ],
    'purge' => [
        'error'     => 'Došlo je do pogreške prilikom brisanja. ',
        'validation_failed'     => 'Vaša potvrda o brisanju nije ispravna. Upišite reč "DELETE" u okvir potvrde.',
        'success'               => 'Zapisi su uspešno i trajno obrisani.',
    ],
    'mail' => [
        'sending' => 'Sending Test Email...',
        'success' => 'Mail sent!',
        'error' => 'Mail could not be sent.',
        'additional' => 'No additional error message provided. Check your mail settings and your app log.'
    ],
    'ldap' => [
        'testing' => 'Testing LDAP Connection, Binding & Query ...',
        '500' => '500 Server Error. Please check your server logs for more information.',
        'error' => 'Something went wrong :(',
        'sync_success' => 'A sample of 10 users returned from the LDAP server based on your settings:',
        'testing_authentication' => 'Testing LDAP Authentication...',
        'authentication_success' => 'User authenticated against LDAP successfully!'
    ],
    'slack' => [
        'sending' => 'Sending Slack test message...',
        'success_pt1' => 'Success! Check the ',
        'success_pt2' => ' channel for your test message, and be sure to click SAVE below to store your settings.',
        '500' => '500 Server Error.',
        'error' => 'Something went wrong.',
    ]
];
