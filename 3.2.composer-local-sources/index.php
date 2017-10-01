<?php
/**
 * BASIC DEVELOPER TRAINING
 * @author Sander Mangel
 * @license Apache License 2.0
 *
 * Copyright 2017 Sander Mangel
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0

 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

require_once __DIR__ . '/vendor/autoload.php';

echo 'Say hello ' . PHP_EOL;
echo Sander\Module\Testfile::hello();

echo PHP_EOL;
echo Helper_RandomFile::hello();

echo PHP_EOL;
echo Sander\Localstuff\Service\Sayhello::hello();

echo PHP_EOL;