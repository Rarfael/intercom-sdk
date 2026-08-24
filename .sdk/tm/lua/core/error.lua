-- Intercom SDK error

local IntercomError = {}
IntercomError.__index = IntercomError


function IntercomError.new(code, msg, ctx)
  local self = setmetatable({}, IntercomError)
  self.is_sdk_error = true
  self.sdk = "Intercom"
  self.code = code or ""
  self.msg = msg or ""
  self.ctx = ctx
  self.result = nil
  self.spec = nil
  return self
end


function IntercomError:error()
  return self.msg
end


function IntercomError:__tostring()
  return self.msg
end


return IntercomError
