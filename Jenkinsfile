pipeline {
  agent any
  stages {

    stage('install') {
       steps {
                script {
                    checkout([$class: 'GitSCM', branches: [[name: 'develop']], doGenerateSubmoduleConfigurations: false, extensions: [[$class: 'CleanBeforeCheckout'], [$class: 'LocalBranch', localBranch: 'origin/develop']], submoduleCfg: [], userRemoteConfigs: [[url: 'https://gitlab.com/silent4business/tabantaj.git']]])
                }
        }
      // steps {
      //   git branch: 'develop', url: 'https://gitlab.com/silent4business/tabantaj.git'
      // }
    }

    stage('build') {
      steps {
        script{
          try {
                // sh 'docker-compose build'
                sh 'docker-compose up -d'
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

      stage('Desplegar a QA') {
      steps {
          script {
              try {
                  // Copiar un archivo de configuración al servidor QA
                  sh 'scp /var/jenkins_home/config.xml desarrollo@192.168.9.78:/var/contenedor/tabantaj'
              } catch (Exception e) {
                  echo 'Excepción ocurrida: ' + e.toString()
              }
          }
      }
  }



  }

  }

