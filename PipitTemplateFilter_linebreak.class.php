<?php
class PipitTemplateFilter_linebreak extends PerchTemplateFilter {
    public function filterBeforeProcessing($value, $valueIsMarkup = false) {
        return nl2br($value);
    }
}


PerchSystem::register_template_filter('linebreak', 'PipitTemplateFilter_linebreak');