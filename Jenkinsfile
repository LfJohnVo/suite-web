pipeline {
    agent any

    stages {
        stage('Install') {
            steps {
                script {
                    // Solo ejecuta el pipeline si hay cambios en la rama 'develop'
                    if (env.BRANCH_NAME == 'develop') {
                        echo "Running pipeline for branch develop"
                    } else {
                        echo "Skipping pipeline for branch ${env.BRANCH_NAME}"
                        currentBuild.result = 'ABORTED'
                        return
                    }
                }
                git branch: 'stagging', url: 'https://gitlab.com/silent4business/tabantaj.git'
            }
        }

        stage('Deploy via SSH') {
            steps {
                script {
                    // Utiliza la clave privada en lugar de la clave pública
                    sshagent(credentials: ['/root/.ssh/id_rsa']) {
                        // Realiza un pull en lugar de un push, y maneja posibles conflictos manualmente
                        sh 'ssh desarrollo@192.168.9.78 "cd /var/contenedor/tabantaj && git pull origin stagging"'
                    }
                }
            }
        }
    }

    post {
        always {
            // Limpia la información confidencial después de ejecutar el pipeline
            script {
                deleteDir()
            }
        }
    }
}
