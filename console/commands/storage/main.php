<?php

import("@core/helpers/command");
import("@commands/storage/_helpers");


/**
 * Storage command
 * 
 * 
 * ----------- Comamnds -----------
 ** php cli storage:clean views
 ** php cli storage:clean cache
 ** php cli storage:clean logs
 ** php cli storage:clean uploads
 ** php cli storage:clean --all
 * --------------------------------
 */
groupCommand("storage:clean ", function() {
    addCommand("--all", "cleanStorage", "Clean stroage files");
    addCommand("views", "cleanViews", "Clean compiled template files");
    addCommand("cache", "cleanCaches", "Clean cached files");
    addCommand("logs", "cleanlogs", "Clean loged files");
    addCommand("uploads", "cleanUploads", "Clean uploaded files");
});