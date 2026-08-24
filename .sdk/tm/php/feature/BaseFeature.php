<?php
declare(strict_types=1);

// Intercom SDK base feature

class IntercomBaseFeature
{
    public string $version;
    public string $name;
    public bool $active;

    // Positions this feature when added via the client `extend` option:
    // "__before__" / "__after__" / "__replace__" name an already-added
    // feature (mirrors the ts feature `_options`). Declared so setting it
    // on an extension instance avoids the dynamic-property deprecation.
    public ?array $_options = null;

    public function __construct()
    {
        $this->version = '0.0.1';
        $this->name = 'base';
        $this->active = true;
    }

    public function get_version(): string { return $this->version; }
    public function get_name(): string { return $this->name; }
    public function get_active(): bool { return $this->active; }

    public function init(IntercomContext $ctx, array $options): void {}
    public function PostConstruct(IntercomContext $ctx): void {}
    public function PostConstructEntity(IntercomContext $ctx): void {}
    public function SetData(IntercomContext $ctx): void {}
    public function GetData(IntercomContext $ctx): void {}
    public function GetMatch(IntercomContext $ctx): void {}
    public function SetMatch(IntercomContext $ctx): void {}
    public function PrePoint(IntercomContext $ctx): void {}
    public function PreSpec(IntercomContext $ctx): void {}
    public function PreRequest(IntercomContext $ctx): void {}
    public function PreResponse(IntercomContext $ctx): void {}
    public function PreResult(IntercomContext $ctx): void {}
    public function PreDone(IntercomContext $ctx): void {}
    public function PreUnexpected(IntercomContext $ctx): void {}
}
