package core

type IntercomError struct {
	IsIntercomError bool
	Sdk              string
	Code             string
	Msg              string
	Ctx              *Context
	Result           any
	Spec             any
}

func NewIntercomError(code string, msg string, ctx *Context) *IntercomError {
	return &IntercomError{
		IsIntercomError: true,
		Sdk:              "Intercom",
		Code:             code,
		Msg:              msg,
		Ctx:              ctx,
	}
}

func (e *IntercomError) Error() string {
	return e.Msg
}
