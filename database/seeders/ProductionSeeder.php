<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Formation;
use App\Models\Experience;
use App\Models\Skill;
use App\Models\Realisation;
use Illuminate\Database\Seeder;

class ProductionSeeder extends Seeder
{
    /**
     * Seed the application's database with production data.
     */
    public function run(): void
    {
        // Créer votre profil utilisateur
        $user = User::firstOrCreate([
            'email' => 'xavier.jeanne@gmail.com'
        ], [
            'name' => 'Xavier Jeanne',
            'email' => 'xavier.jeanne@gmail.com',
            'password' => bcrypt('password_temporaire'), // Changez ce mot de passe
        ]);
        $user->linkedIn = 'https://www.linkedin.com/in/xavier-jeanne-803592168/';
        $user->github = 'https://github.com/xavierjeanne';
        $user->phone = '06 09 35 66 53';
        $user->description = 'Développeur Full Stack passionné par la création d\'applications web performantes et intuitives. Compétent en PHP, Laravel, JavaScript, Vue.js, et bases de données MySQL/PostgreSQL. Toujours à la recherche de nouveaux défis pour améliorer mes compétences et contribuer à des projets innovants.Actuellement chez 102-103, je travaille sur une plateforme SaaS en Laravel 10 et Vue 3, dans un environnement agile.
En parallèle, je poursuis une formation en Python chez OpenClassrooms pour élargir mes compétences et explorer de nouvelles approches de développement.';
        $user->save();
        // Formations
        $formations = [
            [
                'title' => 'Développeur d\'application Python',
                'level' => 'Niveau 6',
                'date' => '2025',
                'organisme' => 'Openclassrooms',
                'description' => 'Construisez des applications web en utilisant le langage de programmation Python et le framework Django.'
            ],
            [
                'title' => 'Développeur Web',
                'level' => 'Niveau 5',
                'date' => '2018',
                'organisme' => 'IFPA Mérignac',
                'description' => 'Formation générale en informatique et programmation'
            ],
            [
                'title' => 'Deug économie et gestion',
                'level' => 'Niveau 4',
                'date' => '1999 - 2002',
                'organisme' => 'Université de Caen',
                'description' => 'Formation générale'
            ],
            [
                'title' => 'Baccalauréat série ES',
                'level' => 'Niveau 3',
                'date' => '1999',
                'organisme' => 'Lycée Arcisse de Caumont',
                'description' => 'Formation générale'
            ],
        ];

        foreach ($formations as $formation) {
            Formation::firstOrCreate([
                'user_id' => $user->id,
                'title' => $formation['title']
            ], array_merge($formation, ['user_id' => $user->id]));
        }

        // Expériences professionnelles
        $experiences = [
            [
                'title' => 'Développeur Full Stack',
                'date_debut' => '2023-01-01',
                'date_fin' => null, // Poste actuel
                'entreprise' => '102-103 - Caen, France',
                'description' => 'Création de fonctionnalités en Laravel et vue, pour la plateforme Sass.
                Création du site vitrine avec backoffice de configuration en Laravel et
                Bootstrap.',
                
            ],
            [
                'title' => 'Développeur Wordpress',
                'date_debut' => '2020-04-01',
                'date_fin' => '2023-05-01',
                'entreprise' => 'Image in France - Caen, France',     
                'description' => 'Création de site web avec Wordpress, maintenance corrective et évolutive.
                Respect du désign, responsivité et compatibilité multi navigateur.',
                
            ],
            [
                'title' => 'Développeur Web',
                'date_debut' => '2019-02-01',
                'date_fin' => '2019-09-01',
                'entreprise' => 'MysocialCompany - Caen, France',
                'description' => 'Création d’un site vitrine sous Drupal.',
             
            ],
            [
                'title' => 'Responsable logistique',
                'date_debut' => '2008-04-01',
                'date_fin' => '2018-12-01',
                'entreprise' => 'Aavd - Bordeaux, France',
                'description' => 'Gestion de la chaîne d\'approvisionnement et optimisation des processus logistiques.',
             
            ]
        ];

        foreach ($experiences as $experience) {
            Experience::firstOrCreate([
                'user_id' => $user->id,
                'title' => $experience['title'],
            ], array_merge($experience, ['user_id' => $user->id]));
        }

        // Compétences
        $skills = [
            // Backend
            [
                'title' => 'PHP',
                'description' => 'Développement backend avec PHP 8+',
                'level' => '15',
                
            ],
            [
                'title' => 'Laravel',
                'description' => 'Framework PHP pour applications web modernes',
                'level' => '14',
               
            ],
            [
                'title' => 'MySQL/PostgreSQL',
                'description' => 'Conception et optimisation de bases de données',
                'level' => '12',
                
            ],
            
            // Frontend
            [
                'title' => 'JavaScript',
                'description' => 'ES6+, programmation asynchrone, DOM',
                'level' => '14',
                
            ],
            [
                'title' => 'Vue.js',
                'description' => 'Framework JavaScript réactif',
                'level' => '14',
                
            ],
            [
                'title' => 'Tailwind CSS',
                'description' => 'Framework CSS utility-first',
                'level' => '13',
                
            ],
            [
                'title' => 'Livewire',
                'description' => 'Framework full-stack pour Laravel',
                'level' => '11',
                
            ],
            
            [
                'title' => 'Git',
                'description' => 'Contrôle de version et collaboration',
                'level' => '12',
                
            ],
            
            [
                'title' => 'HTML/CSS',
                'description' => 'Langages de balisage et de style pour le web',
                'level' => '17',
                
            ],
            [
                'title' => 'jQuery',
                'description' => 'Bibliothèque JavaScript pour simplifier la manipulation du DOM',
                'level' => '15',

            ],
            [
                'title' => 'Bootstrap',
                'description' => 'Bibliothèque CSS pour un développement responsive et mobile-first',
                'level' => '15',

            ],
            [
                'title' => 'WordPress',
                'description' => 'Système de gestion de contenu pour la création de sites web',
                'level' => '14',

            ],
        ];

        foreach ($skills as $skill) {
            Skill::firstOrCreate([
                'user_id' => $user->id,
                'title' => $skill['title']
            ], array_merge($skill, ['user_id' => $user->id]));
        }

        
        $this->command->info('✅ Données de production créées avec succès !');
        $this->command->info('📧 Email: ' . $user->email);
        $this->command->info('🔑 N\'oubliez pas de changer le mot de passe !');
    }
}