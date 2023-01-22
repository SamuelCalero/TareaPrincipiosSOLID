<?php
    interface UserRepository {
        public function getUser($id);
        public function saveUser(User $user);
    }
    
    class MySQLUserRepository implements UserRepository {
        public function getUser($id) {
            // el código para obtener un usuario de una base de datos MySQL
        }
        
        public function saveUser(User $user) {
            // el código para guardar un usuario en una base de datos MySQL
        }
    }
    
    class UserService {
        private $userRepository;
        
        public function __construct(UserRepository $userRepository) {
            $this->userRepository = $userRepository;
        }
        
        public function getUser($id) {
            return $this->userRepository->getUser($id);
        }
        
        public function saveUser(User $user) {
            $this->userRepository->saveUser($user);
        }
    }
?>