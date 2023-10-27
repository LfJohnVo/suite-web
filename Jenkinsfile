pipeline {
  agent any
  stages {

    stage('install') {
      steps {
        git branch: 'stagging', url: 'https://gitlab.com/silent4business/tabantaj.git'
      }
    }

    stage('build') {
      steps {
        script{
          try {
                sh 'docker-compose exec php cp .env.example .env'
                sh 'docker-compose exec php composer install --ignore-platform-reqs'
                sh 'docker-compose exec php php artisan key:generate'
                sh 'docker-compose exec php php artisan migrate'
                sh 'docker-compose exec php chmod 777 -R storage'
                sh 'docker-compose exec php php artisan optimize:clear'
            } catch (Exception e) {
              echo 'Exception occurred: ' + e.toString()
            }
        }
      }
    }

     stage('Deploy via SSH') {
            steps {
                script {
                  
                  sshagent(credentials:['cvOZqbf4+xhN+9tEOa5sXglG02DVl1HiZjQHIuqFkzQ']) {
                        sh 'ssh desarrollo@192.168.9.78 "cd /var/contenedor/tabantaj && git pull origin stagging"'
                    }
              }
          }
     }
     

     }
}

