# Intercom SDK exists test

import pytest
from intercom_sdk import IntercomSDK


class TestExists:

    def test_should_create_test_sdk(self):
        testsdk = IntercomSDK.test(None, None)
        assert testsdk is not None
