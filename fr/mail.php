<?php

return [

    'invoices' => [
        'viewed' => [
            'subject' => 'Votre facture a été vu',
            'body' => 'La facture :code a été vu par le client'
        ],
        'sending' => [
            'subject' => 'Une nouvelle facture de :name',
            'greeting' => 'Cher(e) :name,',
            'body' => ':name vous a envoyé une facture (:code) de  :balance  dû le  :date '
        ],
        'reminder' => [
            'reminder1' => [
                'subject' => 'Rappel: Vous avez un paiement en retard',
                'greeting' => 'Bonjour :name,',
                'body' => 'Ceci est un rappel pour vous informer que la facture :code est en retard.  
                            Si par ailleurs votre paiement venait à nous parvenir avant la reception de la présente, nous vous saurions gré de ne pas en tenir compte.'
            ],
            'reminder2' => [
                'subject' => 'Relance: Vous avez un paiement en retard',
                'greeting' => 'Bonjour :name,',
                'body' => 'Notre service d\'éncaissement montrent que nous n’avons pas encore reçu le paiement de :balance pour la facture :invoice dû depuis le :date.  
                    Si par ailleurs votre paiement venait à nous parvenir avant la reception de la présente, nous vous saurions gré de ne pas en tenir compte.'
            ],
            'reminder3' => [
                'subject' => 'Mise en demeure pour facture impayée [:invoice]',
                'greeting' => 'Bonjour :name,',
                'body' => 'Malgré plusieurs relances, nous n\'avons toujours pas reçu le paiement de :balance correspondant à la facture :invoice qui devait être payée le :date.  
                            En conséquence, vous êtes toujours redevable du montant mentionné ci-dessus auquel s’ajoutent, éventuellement, des frais de rappel.
                            Avant de recouvrer notre créance par voie judiciaire nous vous prions une dernière fois de nous adresser votre paiement.
                            Sans réponse de votre part, nous nous verrons dans l\'obligation d\'engager des poursuites judiciaires.'
            ]
            
        ],
        'expiring' => [
            'greeting' => 'Bonjour :name,',
            'subject' => 'Votre paiement à :company est prévu dans :days days',
            'body' => 'Pour rappel, nous vous avons envoyé une facture **:code** le **:date**, et le paiement dans **:days days**.  
                       Vous pouvez cliquer ci-dessous pour payer par carte de crédit, ou nous contacter pour nous envoyer un chèque.',
            'footer' => 'Merci d\'avance pour votre paiement dans les délais, cela signifie beaucoup pour nous. Faites-nous savoir si vous avez des questions.'
        ],
    ],
    'estimates' => [
        'sending' => [
            'subject' => 'Nouveau devis de la part de :company [:estimate]',
            'greeting' => 'Cher(e) :name,',
            'body' => 'Suite à votre demande, nous avons créé pour vous un devis d\'un montant de :amount à consulter. Si vous avez des questions, n\'hésitez pas à nous contacter. '
        ],
        'accepted' => [
            'greeting' => 'Salut :name,',
            'subject' => 'Devis accepté',
            'body' => ':client a validé votre devis :code d\'un montant de :amount 🎉🎉'
        ],
        'declined' => [
            'greeting' => 'Salut :name,',
            'subject' => 'Devis refusé',
            'body' => 'Le devis :code a été décliné par le client'
        ],
        'viewed' => [
            'greeting' => 'Salut :name,',
            'subject' => 'Devis vu',
            'body' => 'Le devis :code a été consulté par le client'
        ],
        'expiring' => [
            'greeting' => 'Salut :name,',
            'subject' => 'Rappel concernant un devis',
            'body' => 'Le devis :code va expiré dans :days day(s) - :date'
        ],

    ],
    'payments' => [
        'thankyou' => [
            'greeting' => 'Bonjour :name,',
            'subject' => 'Confirmation de paiement',
            'body' => 'Merci pour votre paiement de :amount le :date.',
            'footer' => 'Le paiement a été pris en compte sur la facture avec succès.'
        ],
        'received' => [
            'greeting' => 'Salut :name,',
            'subject' => 'Paiement reçu',
            'body' => 'Vous avez un reçu un paiement d\'un montant de :amount le :date pour la facture :code',
            'footer' => 'Le paiement a été pris en compte sur la facture avec succès.'
        ]
    ],
    'deals' => [
        'created' => [
            'greeting' => 'Salut :name,',
            'subject' => 'Nouvelle négociation créée',
            'body' => 'Deal :title a été créé',
        ],
        'updated' => [
            'greeting' => 'Salut :name,',
            'subject' => 'Négociation modifiée',
            'body' => 'Deal :title a été modifié par :user',
        ],
        'won' => [
            'greeting' => 'Salut :name,',
            'subject' => 'Négociation remportée',
            'body' => 'Deal :title a été remporté par :user 🎉🎉',
        ],
        'lost' => [
            'subject' => 'Négociation perdu',
            'body' => 'Deal :title a été perdu 👎',
        ],
        'commented' => [
            'greeting' => 'Salut :name,',
            'subject' => 'Commentaire sur une négociation',
            'body' => 'Deal :title a reçu un nouveau commentaire',
            'footer' => ''
        ],
    ],
    'leads' => [
        'converted' => [
            'greeting' => 'Salut :name,',
            'subject' => 'Lead convertis en client',
            'body' => 'Lead :name a été convertis en client 🎉🎉',
        ],
        'assigned' => [
            'greeting' => 'Salut :name,',
            'subject' => 'Un lead assigné',
            'body' => 'Lead :name vous a été assigné.',
        ],
        'commented' => [
            'greeting' => 'Salut :name,',
            'subject' => 'Nouveau commentaire sur un lead',
            'body' => 'Lead :name a reçu un nouveau commentaire'
        ]
    ],
    'credits' => [
        'sending' => [
            'subject' => 'Nouvel avoir de :company',
            'greeting' => 'Cher client,',
            'body' => 'Un nouvel avoir (:code) a été créé.'
        ]
    ],
    'contracts' => [
        'reminder' => [
            'subject' => 'Proposition de contrat pour :title',
            'greeting' => 'Contrat :title',
            'body' => 'Voici une proposition de contrat. Faites-nous savoir si vous avez des questions.',
            'footer' => 'Dans l\'attente de travailler avec vous, je vous souhaite une bonne réception des éléments.'
        ],
        'viewed' => [
            'subject' => 'Contrat consulté par le Client',
            'body' => 'Contrat :title a été consulté par le client'
        ],
        'signed' => [
            'subject' => 'Contrat Signé',
            'body' => 'Contrat :title a été signé',
            'footer' => ''
        ],
        'rejected' => [
            'subject' => 'Contrat refusé',
            'body' => 'Contrat :title a été rejeté',
            'footer' => ''
        ],
        'expiring' => [
            'greeting' => 'Salut :name,',
            'subject' => 'Rappel concernant le contrat',
            'body' => 'Contrat :title va expiré dans :days jour(s) - :date'
        ]
    ],
    'projects' => [
        'survey' => [
            'subject' => 'Nous avons besoin de votre avis',
            'greeting' => 'Bonjour :name,',
            'heading' => 'Comment nous évalueriez-vous?',
            'body' => 'Parlez-nous de votre expérience sur le projet :project.  
                        Votre avis nous aide à créer une meilleure expérience client.',
            'footer' => 'Merci pour votre contribution.'
        ],
        'commented' => [
            'greeting' => 'Salut :name,',
            'subject' => 'Commentaire Reçu',
            'body' => 'Le projet :name a reçu un nouveau commentaire'
        ]
    ],
    'tasks' => [
        'reminder' => [
            'greeting' => 'Salut :name,',
            'subject' => 'Rappel concernant une tâche',
            'body' => 'Tâche :name sera en retard le :date'
        ],
        'commented' => [
            'greeting' => 'Salut :name,',
            'subject' => 'Commentaire reçu sur une tâche',
            'body' => 'Tâche :name a reçu un nouveau commentaire'
        ]
    ],
    'tickets' => [
        'created' => [
            'greeting' => 'Salut :name,',
            'subject' => '[:code] Re: :subject',
            'body' => 'Une demande de support a été créé dans notre système pour vous. Pour gérer ou mettre à jour votre ticket, cliquez ci-dessous: ',
            'footer' => 'Merci d\'avoir choisi :company'
        ],
        'opened' => [
            'greeting' => 'Salut :name,',
            'subject' => '[:code] Re: :subject',
            'body' => 'Ticket :subject a été ouvert.  
                        Vous pouvez voir le ticket en utilisant le lien ci-dessous;'
        ],
        'replied' => [
            'greeting' => 'Salut :name,',
            'subject' => '[:code] Re: :subject',
            'body' => 'Ticket :code a reçu une nouvelle réponse.',
            'footer' => 'Pour mettre à jour votre ticket, répondez directement à cet e-mail ou visitez le:'
        ],
        'assigned' => [
            'greeting' => 'Salut :name,',
            'subject' => 'Un ticket vous a été assigné',
            'body' => 'Un nouveau ticket :subject vous a été attribué.  
                        Suivez le lien ci-dessous pour voir le ticket.',
            'footer' => 'Merci,'
        ],
        'closed' => [
            'greeting' => 'Salut :name,',
            'subject' => '[:code] Re: :subject',
            'body' => 'Ticket :subject a été marqué comme fermé.     
                    Si vous estimez que l\'incident n\'est pas résolu, vous pouvez répondre à ce courrier électronique ou rouvrir l\'incident..',
            'footer' => 'Merci,'
        ],
        'survey' => [
            'greeting' => 'Salut :name,',
            'subject' => 'Request #:code',
            'heading' => 'Comment évalueriez-vous l\'assistance que vous avez reçu?',
            'body' => 'Chez :company nous voulons entendre votre avis sur notre service client.  
                        Merci de prendre un moment pour répondre à une question simple en cliquant sur le lien ci-dessous:',
            'footer' => 'Bien à vous,'
        ],
        'answer' => [
            'subject' => '[:code] Re: :subject',
            'body' => 'Est-ce que certains de ces articles répondent à votre question?',
            'footer' => 'Merci,'
        ]
    ],
    'events' => [
        'alert' => [
            'subject' => 'Rappel d\'événement',
            'body' => 'Rappel pour l\'événement :name (:venue) le :date'
        ]
    ],
    'knowledgebase' => [
        'commented' => [
            'greeting' => 'Salut :name,',
            'subject' => 'Commentaire d\'article',
            'body' => 'Nouveau commentaire reçu dans l\'article :subject'
        ]
    ],
    'subscriptions' => [
        'sending' => [
            'greeting' => 'Bonjour :contact,',
            'subject' => 'Demande d\'abonnement',
            'body' => 'Nous avons préparé l\'abonnement :name pour votre entreprise. Cliquez sur le bouton ci-dessous pour consulter votre abonnement et vous abonner.',
            'footer' => 'Meilleures salutations'
        ]
    ],
    'appointments' => [
        'alert' => [
            'greeting' => 'Bonjour :name,',
            'subject' => 'Alerte de rendez-vous',
            'body' => 'Ceci est un rappel pour votre rendez-vous :name le :time à :venue'
        ]
    ],
    'announcements' => [
        'alert' => [
            'greeting' => 'Bonjour :name,',
            'subject' => ':subject',
            'body' => ':message'
        ]
    ],
    'auth' => [
        'verification' => [
            'greeting' => 'Bonjour :name,',
            'subject' => 'Vérification de votre adresse e-mail',
            'button' => 'Vérifier l\'email',
            'body' => 'Merci pour votre inscription sur :company! Avant de commencer, nous devons simplement confirmer que c\'est bien vous. Cliquez ci-dessous pour vérifier votre adresse email:',
            'footer' => 'Si vous n\'avez pas créé de compte, aucune action supplémentaire n\'est requise.'
        ]
    ],
    'calls' => [
        'alert' => [
            'greeting' => 'Salut :name,',
            'subject' => 'Alerte d\'appel',
            'body' => 'Rappel: N\'oubliez pas d\'appeler pour :subject'
        ]
    ],
    'emails' => [
        'opened' => [
            'greeting' => 'Salut :name,',
            'subject' => 'Email ouvert',
            'body' => 'Email :subject a été ouvert par :user'
        ]
    ],
    'messages' => [
        'received' => [
            'greeting' => 'Salut :name,',
            'subject' => 'Nouveau message reçu',
            'body' => ':sender vous a envoyé un message'
        ]
    ],
    'todos' => [
        'expiring' => [
            'greeting' => 'Salut :name,',
            'subject' => 'Rappel de liste de chose à faire',
            'body' => 'Chose à faire :subject sera en retard bientôt'
        ]
    ],
    'issues' => [
        'created' => [
            'greeting' => 'Salut :name,',
            'subject' => '[:code] :subject',
            'body' => 'Problème :subject (:code) a été créé'
        ],
        'changed' => [
            'greeting' => 'Salut :name,',
            'subject' => '[:code] :subject',
            'body' => 'Problème :subject (:code) a été modifié'
        ],
        'commented' => [
            'greeting' => 'Salut :name,',
            'subject' => '[:code] :subject',
            'body' => 'Problème :subject (:code) a reçu un nouveau commentaire',
        ],
    ],
    'gdpr'          => [
        'import' => [
            'greeting' => 'Bonjour :name',
            'body'     => 'Vos données sont prêtes, vérifiez le fichier en pièce jointe.',
            'footer'   => 'Merci,',
        ],
    ],
    'extras'        => [
        'invite' => [
            'greeting' => 'Bonjour',
            'body'     => 'Nous vous avons invité à nous rejoindre afin que vous puissiez voir les avancés du projet, télécharger des fichiers, créer des tâches, participer à des discussions et bien plus encore.',
            'button'   => 'Cliquez sur le bouton ci-dessous pour configurer votre compte et commencer.',
        ],
    ],
];
