pipeline {
    agent any

    stages {
        stage('Limpieza de Espacio de Trabajo') {
            steps {
                deleteDir()
            }
        }

        stage('Build') {
            steps {
                // git 'https://gitlab.com/silent4business/tabantaj.git'
                // sh 'docker-compose up --build -d'
                sh 'php composer install'
                sh 'php php artisan key:generate'
                sh 'php php artisan migrate'
            }
        }

        stage('Desplegar en Stagging') {
             steps {
                sh 'ssh desarrollo@192.168.9.78 "cd  var/contenedor/tabantaj && git pull"'
             }
        }

      }

     post {
        success {
            echo 'Pipeline exitoso, se ha desplegado en stagging.'
        }
        failure {
            echo 'Pipeline fallido, no se ha desplegado en stagging.'
        }
    }
}