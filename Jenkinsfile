pipeline {
    agent any

    stages {
        stage('build') {
            steps {
                sh 'php --version'
                sh 'composer install'
                sh 'vendor/bin/phing setup'
            }
        }
    }
}