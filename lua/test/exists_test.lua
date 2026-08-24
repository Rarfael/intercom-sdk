-- Intercom SDK exists test

local sdk = require("intercom_sdk")

describe("IntercomSDK", function()
  it("should create test SDK", function()
    local testsdk = sdk.test(nil, nil)
    assert.is_not_nil(testsdk)
  end)
end)
