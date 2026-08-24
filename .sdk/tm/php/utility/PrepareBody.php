<?php
declare(strict_types=1);

// Intercom SDK utility: prepare_body

class IntercomPrepareBody
{
    public static function call(IntercomContext $ctx): mixed
    {
        if ($ctx->op->input === 'data') {
            return ($ctx->utility->transform_request)($ctx);
        }
        return null;
    }
}
