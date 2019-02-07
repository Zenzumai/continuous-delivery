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
        stage('testing') {
            steps {
                sh 'vendor/bin/phpcs --report=checkstyle --standard=phpcs.xml --extensions=php,inc --ignore=autoload.php --ignore=vendor/'
            }
        }
    }
}