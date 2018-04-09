<?php

    namespace maxxximus\parser;
    
    interface ParserInterface {
        
        public function process(string $url, string $tag): array;
    }