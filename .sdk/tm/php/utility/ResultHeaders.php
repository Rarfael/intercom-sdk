<?php
declare(strict_types=1);

// Intercom SDK utility: result_headers

class IntercomResultHeaders
{
    public static function call(IntercomContext $ctx): ?IntercomResult
    {
        $response = $ctx->response;
        $result = $ctx->result;
        if ($result) {
            if ($response && is_array($response->headers)) {
                $result->headers = $response->headers;
            } else {
                $result->headers = [];
            }
        }
        return $result;
    }
}
