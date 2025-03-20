<?php

import("@commands/storage/_shared");


function cleanViews(): void {
    _cleanStorageFile("views", "compiled view");
}

function cleanCaches(): void {
    _cleanStorageFile("cache", "cached");
}

function cleanlogs(): void {
    _cleanStorageFile("logs", "loged");
}

function cleanUploads(): void {
    _cleanStorageFile("uploads", "uploaded");
}

function cleanStorage(): void {
    cleanViews();
    
    cleanCaches();
    
    cleanlogs();
    
    cleanUploads();
}