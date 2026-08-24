# Intercom SDK utility: make_context

from intercom_sdk.core.context import IntercomContext


def make_context_util(ctxmap, basectx):
    return IntercomContext(ctxmap, basectx)
