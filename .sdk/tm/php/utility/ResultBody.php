<?php
declare(strict_types=1);

// Intercom SDK utility: result_body

class IntercomResultBody
{
    public static function call(IntercomContext $ctx): ?IntercomResult
    {
        $response = $ctx->response;
        $result = $ctx->result;
        if ($result && $response && $response->json_func && $response->body) {
            $result->body = ($response->json_func)();
        }
        return $result;
    }
}
